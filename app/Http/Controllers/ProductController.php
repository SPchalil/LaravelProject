<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $fruits = array('Mango', 'Orange', 'Banana', 'Apple', 'Pineapple');
        // dd($fruits);
        // echo $fruits;
        // var_dump($fruits);
        return view('welcome', compact('fruits'));
    }
}
