<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index()
    {
        return view('main');
    }
    public function store(Request $request)
    {
        if(!Auth::attempt($request->only(['email', 'password'])))
        {
            return redirect()->back()->withErrors(['Usuário ou senha inválidos']);
        }
        return to_route('main.index');
    }
    public function destroy()
    {
        Auth::logout();
        return to_route('login');
    }
}
