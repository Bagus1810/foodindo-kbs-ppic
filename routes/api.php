<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/check/wa/webhook', function (Request $request) {

//     return response()->json(['reply' => 'lah']);
//     $from = $request->input('from');
//     $text = $request->input('text');

//     // Log ke Laravel
//     \Log::info("WhatsApp dari: $from | Pesan: $text");

//     // Contoh logika
//     $reply = match (strtolower($text)) {
//         'hai', 'halo' => 'Halo juga! 👋',
//         'siapa kamu' => 'Saya bot Laravel 🤖',
//         default => "Nomor ini  : $from   sedang jadi bot, wa kamu: $text"
//     };

//     return response()->json(['reply' => $reply]);
// });
Route::post('/wa/webhook', function (Request $request) {
    $from = $request->input('from');
    $text = $request->input('text');

    $checkUser = User::where('telp', $from)->where('code', $text)->first();
    // cek expdate nya nanti d cek dulu 
    if ($checkUser && $checkUser->status == 'pending'){
        $checkUser->update([
            'status' => 'login'
        ]);
        // return;
        // 22:16 update untuk kirim wa login berhasil, silahkan kembali ke browser 

        // Contoh logika
        $reply = match (strtolower($text)) {
            'hai', 'halo' => 'Halo juga! 👋',
            'siapa kamu' => 'Saya bot Laravel 🤖',
            default => "Nomor $from berhasil login, silahkan kembali ke browser anda."
        };
        // digunakan untuk membalas wa 
        return response()->json(['reply' => $reply]);


    }

    // Log ke Laravel
    // \Log::info("WhatsApp dari: $from | Pesan: $text");

    // Contoh logika
    // $reply = match (strtolower($text)) {
    //     'hai', 'halo' => 'Halo juga! 👋',
    //     'siapa kamu' => 'Saya bot Laravel 🤖',
    //     default => "Nomor ini  : $from   sedang jadi bot, wa kamu: $text"
    // };
    // digunakan untuk membalas wa 
    // return response()->json(['reply' => $reply]);
});




