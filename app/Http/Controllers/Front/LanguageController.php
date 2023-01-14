<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LanguageController extends Controller
{
    public function setLanguage(Request $request)
    {
        $request->validate([
            'lang' => 'in:fa,en,it'
        ]);

        $locale = $request->lang;
        $durata= 24 * 60 * 60;
        Cookie::queue('lang', $locale, $durata);
        if(Auth::check()){
            Auth::user()->update(['lang' => $locale]);
        }
        App::setLocale($locale);
        return back();
    }
}
