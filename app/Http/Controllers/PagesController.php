<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        $number = 40.4545324234;
        $names = "Reinhard Silaen";
        $number = number_format($number, 2);




       // return view('about')->with('number', $number);

        return view('about', [
            'names' => $names,
            'number' => $number
        ]);

    }
}
