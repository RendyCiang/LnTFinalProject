<?php

namespace App\Http\Controllers;

use App\Models\AddCatalogue;
use Illuminate\Http\Request;

class AddCatalogueController extends Controller
{
    //
    public function index()
    {
        return view('add_catalogue');
    }
    
    function StoreCatalogue(Request $request){
        $request->validate([
            'kategori' => ['required'],
            'nama_barang' => ['required', 'min:5', 'max:80'],
            'harga' => ['required'],
            'stok' => ['required'],
            'Photo' => ['required', 'image', 'mimes:jpeg,png,jpg']
        ]);
        
        $Photo = $request->file('Photo');
        $PhotoName = time().'_'.$Photo->getClientOriginalName();
        $Photo->storeAs('public/images', $PhotoName);
    
        AddCatalogue::create([
            'kategori' => $request->kategori,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'Photo' => 'images/'.$PhotoName
        ]);
    
        return redirect('/catalog');
    }
    
    public function showCatalogue(){
        $CatalogueData = AddCatalogue::all();
        return view('catalog', [
            'CatalogueData' => $CatalogueData
        ]);
    }

    public function deleteCatalogue($id){
        $CatalogueData = AddCatalogue::find($id);
        AddCatalogue::destroy($id);
        return redirect('/catalog');
    }

    public function editCatalogue($id){
        $CatalogueData = AddCatalogue::findOrFail($id);
        return view('edit_catalogue', ['data' => $CatalogueData]);
    }
    

    public function CatalogueDataUpdate(Request $request, $id){
        $request->validate([
            'kategori' => ['required'],
            'nama_barang' => ['required', 'min:5', 'max:80'],
            'harga' => ['required'],
            'stok' => ['required'],
            'Photo' => ['required', 'image', 'mimes:jpeg,png,jpg']
        ]);
        
        $Photo = $request->file('Photo');
        $PhotoName = time().'_'.$Photo->getClientOriginalName();
        $Photo->storeAs('public/images', $PhotoName);

        AddCatalogue::find($id)->update([
            'kategori' => $request->kategori,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'Photo' => 'images/'.$PhotoName
        ]);
        return redirect('/catalog');
    }

    public function addOrder($id){
        $CatalogueData = AddCatalogue::findOrFail($id);
        return view('add_order', ['data' => $CatalogueData]);
    }
    
}