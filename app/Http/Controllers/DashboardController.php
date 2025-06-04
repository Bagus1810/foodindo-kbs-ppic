<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\LeadTime;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function indexDashboard(){

        // $getData = DB::connection('second_db')->table('MS_STOCK')
        // ->whereIn('MS_STOCK.TYPE', ['REG','COO', 'CR'])
        // ->leftJoin('MS_SUPPL', 'MS_STOCK.KODE', '=', 'MS_SUPPL.KODE')
        // ->select('MS_STOCK.*', 'MS_SUPPL.NAMA as SUPPLIER')
        // ->orderByRaw("CASE MS_STOCK.TYPE 
        //     WHEN 'REG' THEN 1
        //     WHEN 'COO' THEN 2
        //     WHEN 'CR' THEN 3")
        // ->orderBy('MS_STOCK.KODE', 'asc')  // Urutkan kode barang ascending
        // ->get();

        $getDataReg = DB::connection('second_db')->table('MS_STOCK')
        ->whereIn('MS_STOCK.TYPE', ['REG', 'COO', 'CR'])
        ->select('MS_STOCK.KODE_BRG', 'MS_STOCK.NAMA_BRG','MS_STOCK.TYPE', DB::raw('CAST(MS_STOCK.STOCK_QTY AS INT) as STOCK_QTY'))
        ->orderBy('MS_STOCK.KODE_BRG', 'asc')  // Urutkan kode barang ascending
        ->get();

        for($i=0; $i<count($getDataReg); $i++){
            $getHari = LeadTime::where('TYPE', $getDataReg[$i]->TYPE )->first();
            if ($getHari){
                $getDataReg[$i]->HARI = $getHari->HARI;
            }else{
                $getDataReg[$i]->HARI = 0;
            }
        }

        return view('kbs-pages/dashboard', ['getDataRegs' => $getDataReg]);
    }

    public function getItemDashboard(Request $request){
        $now = Carbon::now(); 
        $start = $now->copy()->subMonths($request->total_bulan)->startOfMonth(); // 1 Januari 2025
        $end = Carbon::now()->subMonth()->endOfMonth();    // 31 Maret 2025
 
        // $totalDay = $start->diffInDays($end) + 1;
        // 13 hari minggu  di 3 bulan kebelakang 
        $totalDay = 0;

        $current = $start->copy();

        while ($current->lte($end)) {
            if (!$current->isSunday()) {
                $totalDay++;
            }
            $current->addDay();
        }

        $startThisMonth = $now->copy()->startOfMonth()->toDateString();
        $endThisMonth = $now->copy()->endOfMonth()->toDateString();

        $today = Carbon::today();
        $endOfMonth = Carbon::now()->endOfMonth();
        $sisaHari = $today->diffInDays($endOfMonth);
        $bufferStock = 100;

      
        
        if ($request->tanggal_merah){
            $totalDay = $totalDay -$request->tanggal_merah;
        }
        if ($request->tanggal_merah_sisa_bulan){
            $sisaHari = $sisaHari -$request->tanggal_merah_sisa_bulan;
        }
        if ($request->buffer_stock){
            $bufferStock = $request->buffer_stock;
        }
   
        $rataRataHarian = (int) floor($totalDay / $request->total_bulan);
    
        // $subQueryPenjualanBulanIni = DB::connection('second_db')->table('TR_SALES')
        // ->select('KODE_BRG', DB::raw('SUM(QUANTITY) as qty_bulan_ini'))
        // ->whereBetween('TGL_ID', [$startThisMonth, $endThisMonth])
        // ->groupBy('KODE_BRG');

        // $subQuery = DB::table('lead_time') // tabel dari database utama
        // ->select('TYPE', 'HARI');

       
      

        $query =  DB::connection('second_db')->table('MS_STOCK')
                ->whereIn('MS_STOCK.TYPE', ['REG', 'COO', 'CR'])
                ->leftJoin('TR_SALES', function ($join) use ($start, $end) {
                    $join->on('MS_STOCK.KODE_BRG', '=', 'TR_SALES.KODE_BRG')
                    ->whereBetween('TR_SALES.TGL_ID', [$start, $end]); // ← filter di sini!
                })
                // ->leftJoinSub($subQueryPenjualanBulanIni, 'sales_this_month', function ($join) {
                //     $join->on('MS_STOCK.KODE_BRG', '=', 'sales_this_month.KODE_BRG');
                // })
                ->leftJoin('TR_BELI_ORDER', function ($join) use ($start, $end) {
                    $join->on('MS_STOCK.KODE_BRG', '=', 'TR_BELI_ORDER.KODE_BRG')
                    ->where('TR_BELI_ORDER.GARANSI', '>', now());
                })
                ->leftJoin(DB::raw('PPIC_KBS.dbo.lead_time as lt'), 'MS_STOCK.TYPE', '=', 'lt.TYPE')
                ->select('MS_STOCK.KODE_BRG', 'MS_STOCK.NAMA_BRG', 'MS_STOCK.TYPE', 'lt.HARI as HARI',
                    DB::raw('CAST(MS_STOCK.STOCK_QTY AS INT) as STOCK_QTY'), 
                    DB::raw('COALESCE(CAST(SUM(TR_SALES.QUANTITY) AS INT), 0) as penjualan'),
                    // DB::raw('COALESCE(CEILING(SUM(TR_SALES.QUANTITY) / ' . $request->total_bulan . '), 0) as average_penjualan'),
                    DB::raw('COALESCE(CAST(CEILING(SUM(TR_SALES.QUANTITY) / ' . $request->total_bulan . ') AS INT), 0) as average_penjualan'),
                    // DB::raw('COALESCE(CAST(CEILING(SUM(TR_SALES.QUANTITY) / ' . $request->total_bulan . ') *'. $bufferStock.'/ 100 AS UNSIGNED), 0) as buffer_stock'),
                    // DB::raw(
                    //     'COALESCE(CAST(CEILING((SUM(TR_SALES.QUANTITY) / ' . $request->total_bulan . ') * ' . $bufferStock . ') / 100 AS INT), 0) as value_buffer_stock'
                    // ),
                    DB::raw(
                        'COALESCE(CAST(CEILING(((SUM(TR_SALES.QUANTITY) / ' . $request->total_bulan . ') * ' . $bufferStock . ') / 100) AS INT), 0) as value_buffer_stock'
                    ),
                    DB::raw(
                        'COALESCE(CAST(CEILING(((SUM(TR_SALES.QUANTITY) / ' . $request->total_bulan . ') * ' . $bufferStock . ') / 100) AS INT), 0) - CAST(MS_STOCK.STOCK_QTY AS INT) as buffer_stock_minus_stock'
                    ),

                    DB::raw(
                        'COALESCE(CAST(CEILING((SUM(TR_SALES.QUANTITY) / ' . $request->total_bulan . ') / ' . $rataRataHarian . ') AS INT), 0) as average_harian'
                    ),
                    DB::raw(
                        'COALESCE(CAST(lt.HARI * CEILING((SUM(TR_SALES.QUANTITY) / ' . $request->total_bulan . ') / ' . $rataRataHarian . ') AS INT), 0) as buffer_by_lead_time'
                    ),
                    // DB::raw('COALESCE(CAST(FLOOR(SUM(TR_SALES.QUANTITY) / ' . $request->total_bulan . ') AS INT), 0) as average_penjualan'),
                    // DB::raw('COALESCE(CAST(sales_this_month.qty_bulan_ini AS INT), 0) as penjualan_bulan_ini'),
                    // DB::raw('COALESCE(CAST(FLOOR(SUM(TR_SALES.QUANTITY) / ' . $totalDay . ') * ' . $sisaHari . ' AS INT), 0) as estimasi_sisa_bulan'),
                    // DB::raw('COALESCE(CAST(SUM(TR_BELI_ORDER.QUANTITY) AS INT), 0) as total_pembelian_mendatang'),
                    // DB::raw('COALESCE(CAST(SUM(TR_BELI_ORDER.QUANTITY) AS INT), 0) + CAST(MS_STOCK.STOCK_QTY AS INT) as total_pembelian_plus_po'),
                    // DB::raw('CAST((COALESCE(CAST(SUM(TR_BELI_ORDER.QUANTITY) AS INT), 0) + CAST(MS_STOCK.STOCK_QTY AS INT)) * ' . ($bufferStock / 100) . ' AS INT) as buffer_stock')
                )
                // ->groupBy('MS_STOCK.KODE_BRG', 'MS_STOCK.NAMA_BRG', 'MS_STOCK.TYPE', 'MS_STOCK.STOCK_QTY',   'sales_this_month.qty_bulan_ini')
                ->groupBy('MS_STOCK.KODE_BRG', 'MS_STOCK.NAMA_BRG', 'MS_STOCK.TYPE', 'MS_STOCK.STOCK_QTY', 'lt.HARI')
                ->orderBy('MS_STOCK.KODE_BRG', 'asc') // Tambahkan ini
                ->get();

        
        // for($i=0; $i<count($query); $i++){
        //     $getHari = LeadTime::where('TYPE', $query[$i]->TYPE )->first();
        //     if ($getHari){
        //         $query[$i]->HARI = $getHari->HARI;
        //     }else{
        //         $query[$i]->HARI = 0;
        //     }
        //     $query[$i]->buffer_by_lead_time = $query[$i]->HARI * $query[$i]->average_harian;
        // }
     
  

        $hasAveragePenjualan = $query->first() && isset($query->first()->average_penjualan);

        Carbon::setLocale('id');
        $month = Carbon::now()->translatedFormat('F');

        return view('kbs-pages/dashboard', ['getDataRegs' => $query, 'hasAveragePenjualan' => $hasAveragePenjualan, 'bulan' => $request->total_bulan, 'month'=>$month, 'sisaHari' => $sisaHari, 'buffer_stock' => $bufferStock]);

    }
}
