<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $title = "Welcome to my Laravel 8 page";
        $credit = "Credit by Reinhard";

        //Data array
        $data = [
            'productOne' => 'IPhone',
            'productTwo' => 'Samsung'
        ];

        // -Compact Method
        // return view('product', compact('title', 'credit'));

        // -With method
        // return  view('product')->with('title', $data);
        // return view('product.index')->with('data',$data);

        // Directly in the view
        return view('product.index',[
            'data' => $data
        ]);
    }

    public function about(){
        return 'This is about us page';
    }

    public function show($id){
        return view('product.name', [
            'product' => $data[$id] ?? 'Product ' . $id . ' does not exist'
        ]);
    }

    public function showProduct($name){
        $data = [
                'iphone' => 'Iphone',
                'samsung' => 'Samsung'
        ];

        return view('product.name', [
            'product' => $data[$name] ?? 'Product ' . $name . ' does not exist'
        ]);
    }


}
