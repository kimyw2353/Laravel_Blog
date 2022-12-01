<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function create()
    {
        return view('login.create');
    }

    public function login(Request $request)
    {
        $data = $request -> validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $loginUser = DB ::table('users') -> where('email', $data['email']) -> where('password', $data['password']) -> first();
        if ($loginUser != null) {
            Session ::put('user', $loginUser);
            return redirect('/');
        }
        return back() -> withInput();
    }

    public function logout(Request $request)
    {
        if (Session::has('user')){
            Session::forget('user');
        }
        return redirect('/');
    }
}
