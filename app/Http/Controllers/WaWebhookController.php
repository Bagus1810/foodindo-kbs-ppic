<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaWebhookController extends Controller
{
    public function handle(Request $request)
    {
        $data = $request->all();
        Log::info('Pesan WA masuk:', $data);

        // Ambil pengirim dan isi pesan
        $from = $data['from'] ?? null;
        $message = $data['message'] ?? null;

        if ($from && $message) {
            // Simpan ke database kalau mau (opsional)

            // Logika balasan otomatis
            $this->sendReply($from, "Hai! Kamu bilang: \"$message\" 👋");

            return response()->json(['status' => 'ok']);
        }

        return response()->json(['status' => 'invalid payload'], 400);
    }

    private function sendReply($to, $message)
    {
        // Kirim balik ke Mudslide server
        $mudslideUrl = 'http://localhost:3000/send-message'; // Ganti jika di server

        Http::post($mudslideUrl, [
            'to' => $to,
            'message' => $message
        ]);
    }
}
