<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        $list_product = Product::all();

        return view('admin',[
            "list_product"=>$list_product
        ]);
    }
}
