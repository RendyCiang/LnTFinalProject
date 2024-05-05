<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $discountProducts = Product::inRandomOrder()->take(4)->get();
        $newestProducts = Product::orderBy('created_at', 'desc')->take(4)->get();
        $randomProducts = Product::inRandomOrder()->take(4)->get();

        return view('home', compact('discountProducts', 'newestProducts', 'randomProducts'));
    }
}
