<?php

namespace App\Http\Controllers\Authenticate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function showViewLogin() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');
        if (!isset($username)) {
            abort('403', "");
        }
    }
}
