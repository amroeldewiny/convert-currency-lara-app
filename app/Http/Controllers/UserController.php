<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    // register user
    public function register(Request $request){
        // create input validation
        $this->validate(request(),[
            'email'    => 'required|email',
            'name'     => 'required',
            'password' => 'required|confirmed'
        ]);

        // create new user
        $user = new User();
        $user->email = $request->input('email');
        $user->name = $request->input('name');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return response()->json(['user' => $user], 201);
    }


    // login user
    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $this->content['token'] = $user->createToken('laracurrency')->accessToken;
            $status = 200;
        }else{
            $this->content['error'] = 'Unauthorised';
            $status = 401;
        }

        return response()->json($this->content, $status);
    }

    // get user

    public function getUser(Request $request){
        $user = $request->user();
        $user->token = $user->createToken('laracurrency')->accessToken;

        return response()->json(['user' => $user], 200);

    }
}
