<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function verify(Request $reg)
    {
        if($reg->uname == $reg->password)
        {
            return redirect('/home');
        }
        else{
            echo "invalid user";
        } 
    }
    public function register()
    {
        return view('login.register');
    }
}
