<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function __invoke()
    {
        return view('admin.login');
    }
    public function login(Request $request)
    {
        $login = $request->login;
        $password = $request->password;
        $user_auth = User::where('login', '=', $login)->where('password', '=', $password)->first();
        $user = User::All();

        if (empty($user)) {
            return view('admin.new');
        }
        
        if($user_auth != null) {
            @session_start();
            $_SESSION['user_id'] = $user_auth->id;
            $_SESSION['user_name'] = $user_auth->name;
            $_SESSION['user_level'] = $user_auth->level;
            
            return redirect()->route('admin.home');


        } else {
            echo ("<script language='javascript'>alert('Usuário não encontrado!');</script>");
            return redirect()->route('admin.login');

        }
        
        
    }
    public function logout()
    {
        @session_start();
        @session_destroy();
        return redirect()->route('admin.login');
    }
    public function new()
    {
        return view('admin.new');
    }
}
