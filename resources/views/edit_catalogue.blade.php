<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('CSS/addCatalogue.css') }}"">
    <title>Add Catalogue</title>
</head>
<body>
    <form action="/update-catalogue/{{ $data->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')        
        <label for="kategori">Category</label>
        <input type="text" name="kategori" id="kategori" value="{{ old('kategori') }}">
        @error('kategori')
            <p>{{ $message }}</p>
        @enderror
    
        <label for="nama_barang">Product Name</label>
        <input type="text" name="nama_barang" id="nama_barang" value="{{ old('nama_barang') }}">
        @error('nama_barang')
            <p>{{ $message }}</p>
        @enderror
        
        <label for="harga">Price</label>
        <input type="text" id="harga" name="harga" placeholder="200000" value="{{ old('harga') }}">
        @error('harga')
            <p>{{ $message }}</p>
        @enderror
        
        <label for="stok">Quantity</label>
        <input type="text" id="stok" name="stok" placeholder="1" value="{{ old('stok') }}">
        @error('stok')
            <p>{{ $message }}</p>
        @enderror
        
        <label for="Photo">Photo</label>
        <input type="file" id="Photo" name="Photo" value="{{ old('Photo') }}">
        @error('Photo')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">Add Product</button>
    </form>
</body>
</html>