<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function about(){ 
            return view('pages.about');    
    }
    public function checkout(){
        return view('pages.checkout');
    }
    public function gallery(){
        return view('pages.gallery');
    }
    public function payment(){
        return view('pages.payment');
    }
    public function shop(){
        return view('pages.shop');
    }
    // public function signin(){
    //     return view('pages.signin');
    // }
    // public function signup(){
    //     return view('pages.signup');
    // }
    public function index(){
        $productshop = product::all();
        // $product_men = Product::Where(

        // );
        return view('pages.shop',compact('productshop'));

    }

}
