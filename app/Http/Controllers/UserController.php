<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
           'name' => 'required',
           'email' => 'required|unique:users',
           'password' => 'required',
           'checkPassword' => 'required|same:password',
        ]);

        User::create($data);

        return redirect('/users');
    }
}
