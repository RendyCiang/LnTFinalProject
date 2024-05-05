<?php

namespace App\Http\Controllers;

use App\Models\AddCatalogue;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function showCatalogue()
    {
        $catalogueData = AddCatalogue::all();
        return view('catalog', compact('catalogueData'));
    }  
    
    public function addToCart($id)
    {
        $catalogue = AddCatalogue::find($id);
        if (!$catalogue) {
            return redirect()->route('catalog')->with('error', 'Product not found.');
        }

        $cart = session()->get('cart');
        if (!$cart) {
            $cart = [
                $id => [
                    'id' => $catalogue->id,
                    'name' => $catalogue->nama_barang,
                    'quantity' => 1,
                    'price' => $catalogue->harga,
                    'photo' => $catalogue->Photo
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->route('catalog')->with('success', 'Product added to cart successfully.');
        }

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->route('catalog')->with('success', 'Product quantity increased.');
        }

        $cart[$id] = [
            'id' => $catalogue->id,
            'name' => $catalogue->nama_barang,
            'quantity' => 1,
            'price' => $catalogue->harga,
            'photo' => $catalogue->Photo
        ];
        session()->put('cart', $cart);
        return redirect()->route('catalog')->with('success', 'Product added to cart successfully.');
    }


}
