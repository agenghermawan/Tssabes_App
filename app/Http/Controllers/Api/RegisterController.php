<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        Validator::make($request->all(),[
            'namaLengkap' => 'required|string',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'alamat' => 'required|max:255',
            'tanggalLahir' => 'required',
        ])->validate();

        $tgl_lahir = Carbon::createFromFormat('d-m-Y', $request->tanggalLahir);

        User::create([
            'namaLengkap' => $request->namaLengkap,
            'email'=> $request->email,
            'alamat'=> $request->alamat,
            'tanggalLahir'=> $tgl_lahir,
            'password' => Hash::make($request->password) ,
        ]);

        $user = User::where('email',$request->email)->first();
        $tokenResult = $user->createToken('authToken')->plainTextToken;

        return response()->json([
            "meta" => [
                "code" => 200,
                "status" => "success",
            ],
            "data" => [
                "access_token" => $tokenResult,
                "token_type" => "Bearer",
                "user" => $user,
            ],
        ]);
    }

    public function login(Request $request)
    {
        Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();

        $credentials = request(['email','password']);
        if(!Auth::attempt($credentials)){
            return response()->json([
                "message" => "Unauthorized",
                "status" => "Authentication Failed",
            ]);
        }

        $user = User::where('email',$request->email)->first();
        $tokenResult = $user->createToken('authToken')->plainTextToken;

        return response()->json([
            "meta" => [
                "status" => "success",
                "message" => "authenticated"
            ],
            "data" => [
                "access_token" => $tokenResult,
                "token_type" => "Bearer",
                "user" => $user
            ],
        ]);
    }

    public function logout(Request $request)
    {
        $token = $request->user()->currentAccessToken();
        return response()->json([
            "data" => $token,
            "meta" => [
                "code" => 200,
                "message" => "revoked",
                "status" => "token revoked",
            ],
        ]);
    }
}
