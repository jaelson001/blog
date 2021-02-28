<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Posts;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //LOGIN
    public function login(){
        return view('login');
    }

    //COMPLETE LOGIN
    public function finishLogin(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $token = $request->input('_token');

        $user = User::where('email', $email)->first();
        if(!$user){
            return redirect()->back()->withErrors(["email" => "Usuário não existe"]);
        }else if($user->password !== md5($password)){
            return redirect()->back()->withErros(['password' => "Senha incorreta para o usuario {$user->name}"]);
        }
        Session::put('lbul', $user->id);
        Session::put('lbun', $user->name);
        Session::save();
        $tabela = Posts::all();
        return view('admin.inicio', ['postagens' => $tabela,'user' => $user]);
    }

    //REGISTER
    public function register(){
        return view('register');
    }

    //COMPLETE REGISTER
    public function finishRegister(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $confirm_password = $request->input('confirm_password');
        $token = $request->input('_token');

        $user = User::where('email', $email)->first();
        if($user){
            return redirect()->back()->withErrors(['email' => "Usuário já é cadastrado"]);
        }
        else if($password !== $confirm_password){
            return redirect()->back()->withErros(['password' => "Senhas não conferem}"]);
        }
        else if(@empty(explode(' ', $name)[1])){
        	return redirect()->back()->withErros(['name' => "Digite seu nome completo"]);
        }
        $final = User::create([
        	'name' => $name,
        	'email' => $email,
        	'password' => md5($password),
        	'created_at' => date('Y-m-d H:i:s'),
        	'modified_at' => date('Y-m-d H:i:s')
        ]);

        Session::put('lbul', $final->id);
        Session::put('lbun', $final->name);
        Session::save();
        $tabela = Posts::all();
        return view('admin.inicio', ['postagens' => $tabela,'user' => $user]);
    }

    //LOGOUT
    public function logout(){
    	Session::flush();
        $tabela = Posts::all();
    	return view('index', ['postagens' => $tabela]);
    }
}
