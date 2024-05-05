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
        if (!$catalogue) {
            return redirect('/catalog');
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'id' => $catalogue->id,
                'name' => $catalogue->nama_barang,
                'quantity' => 1, 
                'price' => $catalogue->harga,
                'photo' => $catalogue->Photo
            ];
        }

        session()->put('cart', $cart);
        return redirect('/catalog');
    }


    public function updateQuantity(Request $request, $id)
    {
        $action = $request->get('action');
        $cart = session()->get('cart', []);

        $catalogue = AddCatalogue::find($id);
        if (!$catalogue) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        if ($action === 'increase') {
            if ($cart[$id]['quantity'] < $catalogue->stok) {
                $cart[$id]['quantity']++;
            } else {
                return redirect()->back()->with('error', 'Cannot add more than available stock.');
            }
        } elseif ($action === 'decrease') {
            $cart[$id]['quantity'] = max(1, $cart[$id]['quantity'] - 1);
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
