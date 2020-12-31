<?php

namespace App\Http\Controllers\APIs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:55',
            'email' => 'email|required|unique:users',
            'password' => 'required|confirmed'
        ]);

        $validatedData['password'] = bcrypt($request->password);

        $user = User::create($validatedData);

        $accessToken = $user->createToken('authToken')->accessToken;

        return response()->json([
	        'user' => $user, 
	        'access_token' => $accessToken
     	]);
    }

    public function login(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (!auth()->attempt($loginData)) {
            return response(['message' => 'Invalid Credentials']);
        }

        $accessToken = auth()->user()->createToken('authToken')->accessToken;

        return response()->json([
	        'user' => Auth::user(), 
	        'access_token' => $accessToken
     	]);

    }

    public function logout(Request $request)
    {
    	$tokenRepository = app('Laravel\Passport\TokenRepository');

        $user = auth('api')->user();

        if ($user) {
            $tokenRepository->revokeAccessToken($user->token()->id);
            return 'logged out';
        } else {
            return 'already logged out';
        }
    }

}
