<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('login');
    }
    public function loginWa(Request $request)
    {
        $telp = $request->get('telp');
        $code = $request->get('code');

        
        $user = User::where('telp', $telp)->where('code',$code)->where('status', 'login')->first();

        if (!$user) {
            return response()->json(['error' => 'User tidak ditemukan'], 404);
        }

        Auth::login($user); // ⬅️ login user tanpa password

        return response()->json([
            'message' => 'Login berhasil',
            'redirect' => route('index') // ⬅️ nanti di-handle JS
        ]);



        
        // if ($user){
        //     if (  $user->status == 'login'){
        //         Auth::login($user);
        //         return view('pages/dashboards-crm-analytics');




        //         return response()->json(['message' => $user[0]['status']]);


              

        //         if (!$checkUSer) {
        //             return response()->json(['error' => 'User tidak ditemukan'], 404);
        //         }
        
        //         Auth::login($checkUSer); // ⬅️ Login tanpa password
        

        //         return redirect()->route('index');



        //         // return view('login');

        //     }
        // }


        // return view('login');
    }

    public function login(Request $request)
    {
        return response()->json(['errors' => $validator->errors()], 422);
        $validator = Validator::make($request->all(), [
            'telp' => ['required'],
            'code' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        if (\Auth::attempt(array('telp' => $validated['telp'], 'code' => $validated['code']))) {
            return redirect()->route('index');
        } else {
            $validator->errors()->add(
                'password', 'The password does not match with username'
            );
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    public function registerView(Request $request){
       
        return view('register');
    }

    public function register(Request $request){
        $now = date('Y-m-d H:i:s');
        $expdate = now()->addMinutes(3);

        $validator = Validator::make($request->all(), [
            'telp' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
            // pakai return back 
        }

        $validated = $validator->validated();
        // dd(session()->all());
        $ipAddress = $request->ip();
        $randomString = Str::random(70); 

        $checkUser = User::where('telp', $validated["telp"])->get();
        if(count($checkUser)>0){
            User::where('telp', $validated["telp"])->update([
                "ip" => $ipAddress,
                "code" => $randomString,
                "status" => 'pending',
                "expdate" => $expdate->format('Y-m-d H:i:s'),
            ]);
        }else{
            $user = User::create([
                'telp' => $validated["telp"],
                "ip" => $ipAddress,
                "code" => $randomString,
                "status" => 'pending',
                "access_code" => '1',
                "expdate" => $expdate->format('Y-m-d H:i:s'),
                // "password" => Hash::make($validated["password"])
            ]);
        }


        // auth()->login($user);

        return redirect()->route('register-code')->with(['codename' => $randomString, 'telp' => $validated["telp"]]);
    }

    public function registerCode(Request $request){
     
        return view('login2');
    }

    public function checkLogin(Request $request){
        $telp = $request->get('telp');
        $code = $request->get('code');

        $checkUSer = User::where('telp', $telp)->where('code',$code)->get();

        return response()->json(['hasil' => $checkUSer]);
        return response()->json(['telp' => $telp, 'code' => $code]);



        return 'taeee';
        return view('login2');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
