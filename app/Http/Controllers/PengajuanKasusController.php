<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\VerifikasiLatarBelakang;
use App\Models\KasusBaru;
use App\Models\Transfer;
use App\Models\Bank;
use App\Models\InvestigasiCase;
use Illuminate\Support\Facades\DB;

class PengajuanKasusController extends Controller
{

    // 22-04-2025
    public function indexKasusBaru(){
        $user = Auth::user();
        return view('app-pages/kasus-baru');
    }

    public function creteKasusBaru(Request $request){
        return redirect()->route('index')->with('success', 'Opsi '.$request->opsi_kasus.' berhasil ditambahkan!');
        // dd($request);
        if ($request->jenis_kasus === 'verifikasi latar belakang'){

        }
        if ($request->jenis_kasus === 'investigasi case'){
            if ($request->opsi_kasus === 'kehilangan'){
                VerifikasiLatarBelakang::where('id', $request->id_verifikasi_latar_belakang)->update([
                    'opsi_kasus' => $request->opsi_kasus
                ]);
                // di rumah dibuka 
                // InvestigasiCase::create([
                //     'id_verifikasi_latar_belakang' => $request->id_verifikasi_latar_belakang,
                //     'serial_number_aset' => $request->serial_number_aset,
                //     'nomor_mesin_kendaraan' => $request->nomor_mesin_kendaraan,
                //     'nomor_rangka_kendaraan' => $request->nomor_rangka_kendaraan
                // ]);
                return redirect()->route('index')->with('success', 'Opsi '.$request->opsi_kasus.' berhasil ditambahkan!');
            }
            
            if ($request->opsi_kasus === 'TPPO'){
                VerifikasiLatarBelakang::where('id', $request->id_verifikasi_latar_belakang)->update([
                    'opsi_kasus' => $request->opsi_kasus
                ]);

                return redirect()->route('index')->with('success', 'Opsi '.$request->opsi_kasus.' berhasil ditambahkan!');
            }

            if ($request->opsi_kasus === 'kehilangan' && $request->opsi_kasus === 'TPPO'){
                return redirect()->route('index')->with('success', 'Opsi '.$request->opsi_kasus.' berhasil ditambahkan!');


                $buktiGambar = $request->file('bukti_gambar');
                $buktiVideo = $request->file('bukti_video');
                $buktiDokuen = $request->file('bukti_dokumen');
    
                if ($request->hasFile('bukti_gambar')) {
                    $missingItems = 5 - count($buktiGambar);
                    if ($missingItems > 0) {
                        $buktiGambar = array_merge($buktiGambar, array_fill(0, $missingItems, null));
                    }
                    for ($i=0; $i < count($buktiGambar); $i++){
                        if($buktiGambar[$i] !== NULL){
                            $type = $buktiGambar[$i]->getClientOriginalExtension();
                            $data = file_get_contents($buktiGambar[$i]);
                            $buktiGambar[$i] = 'data:image/' . $type . ';base64,' . base64_encode($data);
                        }
                    }
                }
                dd($buktiGambar);
            }



            dd($request);
            // dd('investigasi case ya');
            $buktiGambar = $request->file('bukti_gambar');
            $buktiVideo = $request->file('bukti_video');
            $buktiDokuen = $request->file('bukti_dokumen');

            if ($request->hasFile('bukti_gambar')) {
                $missingItems = 5 - count($buktiGambar);
                if ($missingItems > 0) {
                    $buktiGambar = array_merge($buktiGambar, array_fill(0, $missingItems, null));
                }
                for ($i=0; $i < count($buktiGambar); $i++){
                    if($buktiGambar[$i] !== NULL){
                        $type = $buktiGambar[$i]->getClientOriginalExtension();
                        $data = file_get_contents($buktiGambar[$i]);
                        $buktiGambar[$i] = 'data:image/' . $type . ';base64,' . base64_encode($data);
                    }
                }
            }
            dd($buktiGambar);



            VerifikasiLatarBelakang::where('id', $request->id_verifikasi_latar_belakang)->update([
                'opsi_kasus' => $request->opsi_kasus
            ]);
            InvestigasiCase::create([
                'id_verifikasi_latar_belakang' => $request->id_verifikasi_latar_belakang,
                'kronologi_kasus' => $request->kronologi_kasus,
                'no_resi' => $request->no_resi,
                'no_registrasi_pengadilan' => $request->no_registrasi_pengadilan,
                'no_putusan_pengadilan' => $request->no_putusan_pengadilan
            ]);
        }
        // InvestigasiCase
    }


    // 22-04-2025






















    public function indexPengajuanKasusBaru()
    {
        $user = Auth::user();
        return view('app-pages/pengajuan-kasus-baru');
    }
    // public function indexVerifikasiLatarBelakang()
    // {
    //     $user = Auth::user();
    //     return view('app-pages/verifikasi-latar-belakang');
    // }
    // public function createVerifikasiLatarBelakang(Request $request)
    // {
    //     $user = Auth::user();
    //     $inputs = $request->input('foto', []); // default ke array kosong
    //     // Cek kalau semua input kosong
    //     $nonEmpty = array_filter($inputs, function($val) {
    //         return trim($val) !== '';
    //     });
  
    //     if (count($nonEmpty) < 1 && $request->nama_lengkap_dan_gelar === NULL && $request->no_handphone === NULL) {
    //         return back()->with(['error' => 'Minimal satu input harus diisi.']);
    //     }

        

    //     return view('app-pages/verifikasi-latar-belakang');
    // }

































    public function indexFormValidasiLaporan()
    {
        $user = Auth::user();
        return view('app-pages/form-validasi-pengajuan-kasus-baru');
    }

    public function createformPengajuanKasusBaru(Request $request)
    {
        $user = Auth::user();
        if(isset($request->agree)){
            return redirect()->route('index-form-validasi-laporan'); 
        }else{
            return redirect()->route('index-form-pengajuan-kasus-baru')->with(['cases' => strtoupper($request->kasus_baru), 'opsi' => $request->kasus_baru]); 
        }
     
        return view('app-pages/pengajuan-kasus-baru');
    }
   
    public function indexFormPengajuanKasusBaru(Request $request){  
        if (!session()->has('opsi')) {
            return redirect()->route('index-pengajuan-kasus-baru'); 
        }
        return view('app-pages/form-pengajuan-kasus-baru');
    }

   
    // halaman 1 
    public function createPengajuanKasusBaru(Request $request){
        $user = Auth::user();
        $image = $request->file('foto');

        $checkImage = false;
        if ($request->hasFile('foto')) {
            $missingItems = 5 - count($image);
            if ($missingItems > 0) {
                $image = array_merge($image, array_fill(0, $missingItems, null));
            }
            for ($i=0; $i < count($image); $i++){
                if($image[$i] !== NULL){
                    $type = $image[$i]->getClientOriginalExtension();
                    $data = file_get_contents($image[$i]);
                    $image[$i] = 'data:image/' . $type . ';base64,' . base64_encode($data);
                    $checkImage=true;
                }
            }
        }
        if ($checkImage === false && $request->nama_lengkap_dan_gelar === NULL && $request->no_handphone === NULL){
            return back()->with(['error' => 'Minimal satu input harus diisi.']);
        }

        DB::beginTransaction();
        if ($request->hasFile('foto') ){
            $verifikasiLatarBelakang = VerifikasiLatarBelakang::create([
                'jenis_kasus' => $request->jenis_kasus,
                'nama_lengkap_dan_gelar' => $request->nama_lengkap_dan_gelar,
                "no_handphone" => $request->no_handphone,
                "foto1" => $image[0],
                "foto2" => $image[1],
                "foto3" => $image[2],
                "foto4" => $image[3],
                "foto5" => $image[4],
                "user_id" => $user->telp
            ]);
            DB::commit();
            return redirect()->route('index-informasi-tambahan')->with(['id'=> $verifikasiLatarBelakang->id, 'jenisKasus' => $request->jenis_kasus]);
        }else{
            $verifikasiLatarBelakang = VerifikasiLatarBelakang::create([
                'jenis_kasus' => $request->jenis_kasus,
                'nama_lengkap_dan_gelar' => $request->nama_lengkap_dan_gelar,
                "no_handphone" => $request->no_handphone,
                "user_id" => $user->telp
            ]);
            DB::commit();
            return redirect()->route('index-informasi-tambahan')->with(['id'=> $verifikasiLatarBelakang->id, 'jenisKasus' => $request->jenis_kasus]);
        }

        // sampai sini end  bawah di comment


        // $videoFile = $request->file('video');
        // if ($request->hasFile('video')) {
        //     $extension = $videoFile->getClientOriginalExtension();
        //     $data = file_get_contents($videoFile);
        //     $base64Video = 'data:video/' . $extension . ';base64,' . base64_encode($data);
        // }

        
        DB::beginTransaction();
        if ($request->hasFile('image') && $request->hasFile('video') ){
            $kasusBaru = KasusBaru::create([
                'jenis_kasus' => $request['jenis_kasus'],
                "opsi_kasus" => $request['opsi_kasus'],
                "nik" => $request['nik'],
                "nama_target" => $request['nama_target'],
                "data_tambahan" => $request['data_tambahan'],
                "image1" => $image[0],
                "image2" => $image[1],
                "image3" => $image[2],
                "image4" => $image[3],
                "image5" => $image[4],
                // "video" => $base64Video ,
                "user_id" => 'bagus',
                "tenggat_waktu_kasus" => $request['tenggat_waktu_kasus'],
                // "password" => Hash::make($validated["password"])
            ]);

            $transfer = Transfer::create([
                'kasus_baru_id' => $kasusBaru->id,
                'status' => 'menunggu',
                'user_id' => 'bagus',
            ]);
            DB::commit();
        
            return redirect()->route('index-transfer')->with(['id_kasus'=>$kasusBaru->id, 'id_transfer' => $transfer->id, 'status_transfer' =>$transfer->status ]);  
        }
        if ($request->hasFile('image') && !$request->hasFile('video') ){
            // dd('ada image dan tidak ada video');
            $kasusBaru = KasusBaru::create([
                'jenis_kasus' => $request['jenis_kasus'],
                "opsi_kasus" => $request['opsi_kasus'],
                "nik" => $request['nik'],
                "nama_target" => $request['nama_target'],
                "data_tambahan" => $request['data_tambahan'],
                "image1" => $image[0],
                "image2" => $image[1],
                "image3" => $image[2],
                "image4" => $image[3],
                "image5" => $image[4],
                "user_id" => 'bagus',
                "tenggat_waktu_kasus" => $request['tenggat_waktu_kasus'],
                // "password" => Hash::make($validated["password"])
            ]);
            
            $transfer = Transfer::create([
                'kasus_baru_id' => $kasusBaru->id,
                'status' => 'menunggu',
                'user_id' => 'bagus',
            ]);
            DB::commit();

            return redirect()->route('index-transfer')->with(['id_kasus'=>$kasusBaru->id, 'id_transfer' => $transfer->id, 'status_transfer' =>$transfer->status ]);   
        }
        if (!$request->hasFile('image') && $request->hasFile('video') ){
            // dd('tidak ada image dan ada video');
         
            $kasusBaru = KasusBaru::create([
                'jenis_kasus' => $request['jenis_kasus'],
                "opsi_kasus" => $request['opsi_kasus'],
                "nik" => $request['nik'],
                "nama_target" => $request['nama_target'],
                "data_tambahan" => $request['data_tambahan'],
                "video" => $base64Video ,
                "user_id" => 'bagus',
                "tenggat_waktu_kasus" => $request['tenggat_waktu_kasus'],
                // "password" => Hash::make($validated["password"])
            ]);

            $transfer = Transfer::create([
                'kasus_baru_id' => $kasusBaru->id,
                'status' => 'menunggu',
                'user_id' => 'bagus',
            ]);
            DB::commit();

            return redirect()->route('index-transfer')->with(['id_kasus'=>$kasusBaru->id, 'id_transfer' => $transfer->id, 'status_transfer' =>$transfer->status ]);  
        }
        if (!$request->hasFile('image') && !$request->hasFile('video') ){
            // dd('tidak ada image dan video');
            $kasusBaru = KasusBaru::create([
                'jenis_kasus' => $request['jenis_kasus'],
                "opsi_kasus" => $request['opsi_kasus'],
                "nik" => $request['nik'],
                "nama_target" => $request['nama_target'],
                "data_tambahan" => $request['data_tambahan'],
                "user_id" => 'bagus',
                "tenggat_waktu_kasus" => $request['tenggat_waktu_kasus'],
                // "password" => Hash::make($validated["password"])
            ]);

            $transfer = Transfer::create([
                'kasus_baru_id' => $kasusBaru->id,
                'status' => 'menunggu',
                'user_id' => 'bagus',
            ]);
            DB::commit();
            return redirect()->route('index-transfer')->with(['id_kasus'=>$kasusBaru->id, 'id_transfer' => $transfer->id, 'status_transfer' =>$transfer->status ]);  
        }
    }

    public function indexTransfer(Request $request){
        $user = Auth::user();
        $id =  $id = session('id_kasus');
        $getQris = Bank::where('id', '1')->first();
      
        $getTranfer = Transfer::where('kasus_baru_id', $id)->first();
        // dd(  $getTranfer);
        return view('app-pages/form-transfer', ['transfer'=> $getTranfer, 'qris' => $getQris]);
    }   
}
