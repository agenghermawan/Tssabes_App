<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\Register;
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
            'email' => 'required|string|max:255|unique:users',
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
        $token = $request->user()->currentAccessToken()->delete();
        return response()->json([
            "meta" => [
                "code" => 200,
                "message" => "revoked",
                "status" => "token revoked",
            ],
        ]);
    }

    public function users()
    {
        $data = User::with('statistic')->paginate(5);
        return response()->json([
            'meta' => [
                'code' => 200,
                'status' => 'success',
            ],
            UserResource::collection($data),
        ]);
    }

    public function show($id)
    {
        $checkUser = User::where('id',$id)->first();
        if($checkUser == null){
            return response()->json([
                'meta' => [
                    'status' => 'error',
                    'message' => 'id not found'
                ],
            ]);
        }else{
            $data = new UserResource(User::with('statistic')->where('id',$id)->first());
          
            return response()->json([
                'meta' => [
                    'status' => 'success',
                    'code' => 200,
                ],
                'data' => $data
            ]);
        }
    }

    public function daftarUlang(RegisterRequest $request)
    {
        $data = $request->all();

        $data['foto'] = $request->file('foto')->storeAs('image/daftar', $request->file('foto')->getClientOriginalName(), 'public');
        $data['akte'] = $request->file('akte')->storeAs('image/akte', $request->file('akte')->getClientOriginalName(), 'public');

        Register::create($data);
        return response()->json([
            'meta' => [
                'status' => 'success',
                'code' => '201'
            ],
            'data' => $data
        ]);
    }
}
