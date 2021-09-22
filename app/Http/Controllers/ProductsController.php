<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index(){

        //Compact method of passing data to views
    //     $title = "Welcome";
    //     $description ="Another passage to the view";
    //     return view('products.index',compact('title','description'));
    // }

    // $title = "Welcome";
    // //     $description ="Another passage to the view";

    // //With method for passing data into views
    // return view('products.index')->with('title',$title);}

    //Can also pass an array
    //  $data =[
    //     'productOne' => 'iPhone',
    //      'productTwo' => 'Samsung'
    //  ];
    // // return view('products.index')->with('data',$data);

    //     //Directly in the view
    //     return view('products.index', ['data' => $data]);
    print_r(route('products'));
      return view('products.index');
}

    public function about(){
        return view('products.about');
    }

    // public function show($name){
    //     $data =[
    //         'iphone' => 'iPhone',
    //          'samsung' => 'Samsung'
    //      ];
    //     return view('products.index',[
    //         'products' =>$data[$name]
    //     ]);
   
    // }
}
