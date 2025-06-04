<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\KasusBaru;
use App\Models\Bank;

class BankController extends Controller
{
    public function indexBank(){
        $user = Auth::user();

        // $getKasus = KasusBaru::where('id', '1')->first();
        
        return view('app-pages/admin/rekening');
    }

    public function createRekening(Request $request){
        $user = Auth::user();
        $image = $request->file('qris');
        // validate laravel 

        if ($request->hasFile('qris')) {
            $type = $image[0]->getClientOriginalExtension();
            $data = file_get_contents($image[0]);
            $image[0] = 'data:image/' . $type . ';base64,' . base64_encode($data);
        }

        Bank::create([
            "nama_bank" => $request->nama_bank,
            "nomor_rekening" => $request->nomor_rekening,
            "image" => $image[0],
            "user_id" => 'bagus',
        ]);

        return back();

    }
}
