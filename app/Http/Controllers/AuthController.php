<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('administrativos.auth.login');
    }

    public function login(Request $request)
    {

        $user = [
            'CEDULA' => $request->cedula,
            'CLAVE' => $request->clave
        ];


        // dd(Auth::attempt($user));
        if (Auth::attempt($user)) {
            $request->session()->regenerate();
            return redirect('/administrativos');
        } else {

            return redirect('/login')
                ->withErrors([
                    'msg' => 'Usuario o contrasena incorrecta'
                ]);
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
