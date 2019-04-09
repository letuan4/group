<?php

namespace App\Http\Controllers\Language;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function language(Request $request) {
        Session::put('language', $request->input('language'));
        return redirect()->back();
    }
}
