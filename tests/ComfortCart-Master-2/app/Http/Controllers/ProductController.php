<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function redirectToCreateProductPage(){
        return view('add_product');
    }

    public function createProduct(Request $request){
        // dd($request);
        $validated = $request->validate([
            'nama_produk_input'=>'required||max:255',
            'gambar_produk_input'=>'required|mimes:jpg,jpeg,png',
            'deskripsi_produk_input'=>'required',
            'harga_produk_input'=>'required',
            'stok_produk_input'=>'required'
        ]);

        $path = $request->file('gambar_produk_input');
        $product = Product::create([
        'nama_produk' => $request->nama_produk_input,
        'gambar_produk_path'=>$path,
        'deskripsi_produk' => $request->deskripsi_produk_input,
        'harga_produk' => $request->harga_produk_input,
        'stok_produk'=> $request->stok_produk_input
        ]);

        //convert string nama asli+id
        $fileName=$product->id.$path->getClientOriginalName();
        $path->storeAs('public/productImages', $fileName);
        $product->gambar_produk_path='productImages/'.$fileName;
        $product->save();

        return redirect('/admin-panel');
    }

    public function editProductPage($id){
        $product = Product::findOrFail($id);
        // dd($product);
        return view('edit_product', ["product"=>$product]);
    }

    public function editProduct(Request $request, $id){
        $validated = $request->validate([
            'nama_produk_input'=>'required||max:255',
            'gambar_produk_input'=>'required|mimes:jpg,jpeg,png',
            'deskripsi_produk_input'=>'required',
            'harga_produk_input'=>'required',
            'stok_produk_input'=>'required'
        ]);
        
        $product=Product::find($id);
        Storage::delete('/public/'.$product->gambar_produk_path);
        $path = $request->file('gambar_produk_input');
        Product::findOrFail($id)->update([
            'nama_produk'=>$request->nama_produk_input,
            'gambar_produk_path'=>$path,
            'deskripsi_produk'=>$request->deskripsi_produk_input,
            'harga_produk'=>$request->harga_produk_input,
            'stok_produk'=>$request->stok_produk_input
        ]);
        // dd($product);
        $product=Product::find($id);
        $fileName=$product->id.$path->getClientOriginalName();
        $path->storeAs('public/productImages', $fileName);
        $product->gambar_produk_path='productImages/'.$fileName;
        $product->save();

        return redirect('/admin-panel');
    }

    public function deleteProduct($id){
        // Product::findOrFail($id)->delete();
        Product::destroy($id);
        return redirect('/admin-panel');
    }
}
