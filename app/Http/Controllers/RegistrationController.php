<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration.index');
    }

    public function save()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'username' => 'required|max:12|min:4',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $attributes['password'] = bcrypt($attributes['password']);
        User::create($attributes);

        return redirect('/');
    }
}
