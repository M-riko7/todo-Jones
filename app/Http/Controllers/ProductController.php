<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class ProductController extends Controller
{
    public function index()
    {
        $products = Post::all();
        return view('products.index',['products' => $products]);
    }

    // public function create(){
    //     return view('products.create');
    // }

    // public function store(Request $request){
    //     dd($request);
    // }

    
}
