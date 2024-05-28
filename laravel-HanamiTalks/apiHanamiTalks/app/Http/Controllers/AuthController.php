<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(UserRequest $request)
    {
        $data = $request->validated();
        $user = User::create([
            'username' => $request->username,
            'nickname' => $request->nickname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => $request->type,
            'kanjiLvl' => $request->kanjiLvl,
            'grammarLvl' => $request->grammarLvl,
            'vocabLvl' => $request->vocabLvl,
            'image' => $request->image,
        ]);
    
        $token = $user->createToken('auth_token')->plainTextToken;
    
        return response()->json([
            'data' => new UserResource($user), 
            'access_token' => $token, 
            'token_type' => 'Bearer'
        ]);
    }

    public function logout(){
        auth()->user()->tokens()->delete();
        return ['message' => 'Session closed successfully.'];
    }

    public function login(Request $request){   
        $user = User::where('username', $request->username)->firstOrFail();

        if(!Hash::check($request->password, $user->password)){
            return response()->json(['message' => 'Incorrect username or password'], 401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json(['data' => new UserResource($user),
                                'access_token' => $token,
                                'token_type' => 'Bearer']);
    }

}
