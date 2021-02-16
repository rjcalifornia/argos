<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

        return response([ 'user' => $user, 'access_token' => $accessToken]);
    }
    
    //If the request is without authentication, instead of redirecting to the login page I send an error
    public function restricted(Request $request){
        return response()->json(['message' => 'Unauthorized'],403);
    }
    
    //Return the user details
    public function userDetails(Request $request){
        
        //If authenticated, it will return a json with the user details
        return response()->json(request()->user());
    }

    public function login(Request $request)
    {
        //Check if both fields have data
        if($request['email'] == null || $request['password'] == null){
            return response()->json(['message' => 'Please enter the correct data'],422);
        }
        
        $loginData = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        

        if (!auth()->attempt($loginData)) {
            return response()->json(['message' => 'Invalid Credentials'], 403);
        }
        
        //$email = $request['email'];
        
        //$user = User::where('email',$email) -> first();
        
        
       // $accessToken = auth()->user()->createToken('authToken')->accessToken;
        //$accessToken = $user->createToken('authToken')->accessToken;

        

        $accessToken = auth()->user()->createToken('authToken')->accessToken;

        return response()->json(['user' => auth()->user(), 'access_token' => $accessToken], 200);

    }
        public function logoutApi()
    { 
        if (auth()->check()) {
           auth()->user()->AauthAcessToken()->delete();
        }
    }

}
