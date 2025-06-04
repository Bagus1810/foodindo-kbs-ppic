<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\LeadTime;
use Carbon\Carbon;


class LeadTimeController extends Controller
{
    public function indexLeadTime(){
        $getLeadTime =LeadTime::get();

        return view('kbs-pages/lead-time', ['leadTimes' => $getLeadTime]);
    }

    public function createLeadTime(Request $request){
        $user = Auth::user();
        $now = Carbon::now(); 

        $check = LeadTime::where('KODE',$request->KODE )
                        -> where('NAMA',$request->NAMA )
                        -> where('TYPE',$request->TYPE )
                        -> where('HARI',$request->HARI )
                        ->first();
        if($check){
            return back()->with('warning', 'Leadtime sudah tersedia!');
        }else{
            LeadTime::create([
                'KODE' => $request->KODE,
                'NAMA' => $request->NAMA,
                'TYPE' => $request->TYPE,
                'HARI' => $request->HARI,
                'QUANTITY' => $request->QUANTITY,
                'USERID' => $user,
                'TGL_ID' => now()
            ]);
            return redirect()->route('index-lead-time')->with('success', 'Leadtime berhasil ditambahkan!');
        }

    }

    public function updateLeadTime(Request $request){
        $user = Auth::user();
        $now = Carbon::now(); 

        $check = LeadTime::where('id', $request->ID)->first();

        if ($check){
            LeadTime::where('id', $request->ID)->update([
               'KODE' => $request->KODE,
                'NAMA' => $request->NAMA,
                'TYPE' => $request->TYPE,
                'HARI' => $request->HARI,
                'QUANTITY' => $request->QUANTITY,
                'USERID' => $user,
                'TGL_ID' => now()
            ]);
            return redirect()->route('index-lead-time')->with('success', 'Leadtime berhasil diupdate!');
        }else{
            return redirect()->route('index-lead-time')->with('warning', 'Tidak ada leadtime yang diupdate!');
        }
    }

    public function deleteLeadTime(Request $request){
        $check = LeadTime::where('id', $request->ID)->first();
        if ($check){
            $check->delete();
            return redirect()->route('index-lead-time')->with('success', 'Leadtime berhasil dihapus!');
        }else{
            return redirect()->route('index-lead-time')->with('warning', 'Tidak ada leadtime yang dihapus!');
        }
    }
}
