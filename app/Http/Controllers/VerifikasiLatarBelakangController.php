<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\VerifikasiLatarBelakang;
use Illuminate\Support\Facades\DB;

class VerifikasiLatarBelakangController extends Controller
{
    public function indexVerifikasiLatarBelakang()
    {
        $user = Auth::user();
        return view('app-pages/verifikasi-latar-belakang');
    }

    public function createVerifikasiLatarBelakang(Request $request)
    {
        dd(';ah');
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

        dd($request);

 
        DB::beginTransaction();
        if ($request->hasFile('foto') ){
            $verifikasiLatarBelakang = VerifikasiLatarBelakang::create([
                'nama_lengkap_dan_gelar' => $request['jenis_kasus'],
                "no_handphone" => $request['opsi_kasus'],
                "foto1" => $image[0],
                "foto2" => $image[1],
                "foto3" => $image[2],
                "foto4" => $image[3],
                "foto5" => $image[4],
                "user_id" => $user->telp
            ]);
            DB::commit();
            return redirect()->route('index-informasi-tambahan')->with('id', $verifikasiLatarBelakang->id);
        }

    }

    public function indexInformasiTambahan()
    {
        $user = Auth::user();
        return view('app-pages/informasi-tambahan');
    }

    public function createInformasiTambahan(Request $request){
      
        DB::beginTransaction();
        VerifikasiLatarBelakang::where('id', $request->id_verifikasi_latar_belakang)->update([
            'nik' => $request['nik'],
            "email" => $request['email'],
            "sosial_media" => $request['sosial_media'],
            "tempat_tanggal_lahir" => $request['tempat_tanggal_lahir'],
            "nkk" => $request['nkk'],
            "alamat_domisili" => $request['alamat_domisili'],
            "no_bpjs" => $request['no_bpjs'],
            "no_npwp" => $request['no_npwp'],
            "no_sim" => $request['no_sim'],
            "jenis_sim" => $request['jenis_sim'],
            "plat_kendaraan" => $request['plat_kendaraan'],
            "lulusan_pendidikan" => $request['lulusan_pendidikan'],
            "no_rekening" => $request['no_rekening'],
            "no_paspor" => $request['no_paspor'],
        ]);
        DB::commit();
        return redirect()->route('index-kasus-baru')->with(['id'=> $request->id_verifikasi_latar_belakang, 'jenisKasus' => $request->jenis_kasus]);
     




        // $cleanInput = strip_tags($request->input('nik'));
        // dd($request->input('nik'));
        // dd($cleanInput);
        // $catatan = $request->input('nik');
        // dd($catatan[0]);
        // dd($request->input('nik'));
    }

    // public function creteVerifikasiLatarBelakang(Request $request){
    //     $validator = Validator::make($request->all(), [
    //         'nama_target' => 'required|unique:posts',
    //         'no_handphone' => 'required',
    //         'foto'   => 'required|array',
    //         'foto.*' => 'image|mimes:jpeg,png,jpg|max:2048',
    //     ], [
    //         'nama_target.required' => 'Nama lengkap dan gelar wajib diisi',
    //         'nama_target.unique' => 'Nama ini sudah digunakan',
    //         'no_handphone.required' => 'No handphone wajib diisi',
    //         'foto.required'   => 'Minimal satu gambar harus di‐upload.',
    //         'foto.*.image'    => 'File harus berupa gambar.',
    //         'foto.*.mimes'    => 'Format gambar harus jpeg/png/jpg.',
    //         'foto.*.max'      => 'Ukuran gambar maksimal 2MB per file.',
    //     ]);


    //     // $validated = $request->validate([
    //     //     'nama_target' => 'required|unique:posts|max:255',
    //     //     'no_handphone' => 'required',
    //     //     'foto'   => 'required|array',  
    //     //     'foto.*' => 'image|mimes:jpeg,png,jpg|max:2048'
    //     // ], [
    //     //     'nama_target'     => 'Nama lengkap dan gelar wajib diisi',
    //     //     'no_handphone'     => 'No handphone wajib diisi',
    //     //     'foto.required'   => 'Minimal satu gambar harus di‐upload.',
    //     //     'foto.*.image'    => 'File harus berupa gambar.',
    //     //     'foto.*.mimes'    => 'Format gambar harus jpeg/png/jpg.',
    //     //     'foto.*.max'      => 'Ukuran gambar maksimal 2MB per file.',
    //     // ]);

    //     if ($validator->fails()) {
    //         return redirect()->back()
    //             ->withErrors($validator)
    //             ->withInput()
    //             ->with('opsi', $request->jenis_kasus); // Tambahan data ke session
    //     }

    //     dd('lah');
    //     dd($request);
    // }
}
