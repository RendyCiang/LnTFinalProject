<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <title>Your Cart</title>
</head>
<body>
    <div class="cart-item">
        @if($item->product)
            <img src="{{ asset($item->product->Photo) }}" alt="{{ $item->product->nama_barang }}">
            <div class="item-details">
                <h3>Category: {{ $item->product->kategori }}</h3>
                <h3>Product Name: {{ $item->product->nama_barang }}</h3>
                <h3>Price: Rp{{ $item->product->harga }}</h3>
                <h3>Stock: {{ $item->product->stok }}</h3>
                <p>Quantity: {{ $item->quantity }}</p>
            </div>
        @else
            <p>Product not found</p>
        @endif
    </div>
    
</body>
</html>
