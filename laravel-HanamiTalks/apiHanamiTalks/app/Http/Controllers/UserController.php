<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
//TODO este controlador es muy similar al de AuthController, considera mover este código al AuthController.
class UserController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        // Retrieve the authenticated user
        $user = $request->user();

        // Return the user information using a resource
        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, $idUser)
    {
        $userUpdate = User::find($idUser);
    
        if (!$userUpdate) {
            return response()->json(['error' => 'User not found'], 404);
        }
    
        $userUpdate->username = $request->username;
        $userUpdate->nickname = $request->nickname;
        $userUpdate->email = $request->email;
        $userUpdate->type = $request->type;
        $userUpdate->kanjiLvl = $request->kanjiLvl;
        $userUpdate->vocabLvl = $request->vocabLvl;
        $userUpdate->grammarLvl = $request->grammarLvl;
    
        if ($request->filled('password')) {
            $userUpdate->password = Hash::make($request->password);
        }
    
        $userUpdate->kanjis()->sync($request->input('kanjis', []));
        $userUpdate->vocabularies()->sync($request->input('vocabularies', []));
        $userUpdate->grammars()->sync($request->input('grammars', []));
    
        $userUpdate->save();
    
        return new UserResource($userUpdate); 
    }
    
}
