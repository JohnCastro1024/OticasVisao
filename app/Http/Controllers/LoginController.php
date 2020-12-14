<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
//Request recupera dados enviado. Metodo POST não possui segurança necessaria.

public function logar(Request $request) {
    if ($request->email == 'jonathancastro@teste.com' && $request->senha == '123456') {
        $request->session()->put('usuario', 'Jonathan');
        return redirect()->route('home');
    // public function logar(Request $request) { 
        

        //$login = 'jonathancastro@teste.com';
        //$senha = '123456';

        //if ($request->email == 'jonathancastro@teste.com' && $request->senha == '123456')
        //return view ('home');
    }
        else
       //imprime mensagem de erro ao invalidar usuario ou senha
       return redirect('login')->with('erro', 'Login ou senha inválida');   
    }
    public function logout(Request $request) {
        $request->session()->flush();
        return redirect('login');
    }
    public function login(){
        return view ('login');
        {
            
        }
    }
}
