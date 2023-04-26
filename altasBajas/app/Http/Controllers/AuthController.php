<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{ 
    public function login(){
        if (Auth::check()) {
            return redirect()->route('inicio');
        }
        return view('login');
    }

    public function logear(Request $request){
        $credenciales = $request->only("name", "password");
        if (Auth::attempt($credenciales)) { 
            return redirect()->route('inicio');
        } else {
            //retorna el dato anterior
            return back()->withInput($credenciales);
        }
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('auth-login');
    }

    public function agregarNuevo(){
        $item = new User();
        $item->name = 'dulce';
        $item->password = Hash::make('12345');
        $item->save();
        return $item;
    }

}

