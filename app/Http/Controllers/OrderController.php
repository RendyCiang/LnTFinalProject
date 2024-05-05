<?php

namespace App\Http\Controllers;

use App\Models\AddCatalogue;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
        $catalogueData = AddCatalogue::all();
        return view('catalog', compact('catalogueData'));
    }

    public function addToCart($id)
    {
        $catalogue = AddCatalogue::find($id);
        
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

    public function updateQuantity(Request $request, $id)
    {
        $action = $request->get('action');
        $cart = session()->get('cart');

        if ($action === 'increase') {
            $cart[$id]['quantity']++;
        } elseif ($action === 'decrease' && $cart[$id]['quantity'] > 1) {
            $cart[$id]['quantity']--;
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Cart updated successfully');
    }


    public function removeItem($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return back()->with('success', 'Item removed from cart.');
    }




}
