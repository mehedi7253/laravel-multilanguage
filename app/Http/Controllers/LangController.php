<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Stichoza\GoogleTranslate\GoogleTranslate;

class LangController extends Controller
{
    public function index()
    {
        $list = [
            'name' => 'name one',
            'name2' => 'name two',
            'name3' => 'name three',
            'name4' => 'name four',
            'name5' => 'name five',
            'name6' => 'name six',
            'name7' => 'name seven',
            'name8' => 'name eight',
        ];

        $test = GoogleTranslate::trans('hello world', app()->getLocale());
        return view('welcome', compact('list', 'test'));
    }

    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
        return redirect()->back();
    }
}
