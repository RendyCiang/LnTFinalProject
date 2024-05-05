<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('CSS/cart.css') }}">
    <title>Cart</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <h2>ChipiChapa</h2>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="/catalog">Catalog</a></li>
        </ul>
        @auth
            <div class="dropdown ml-auto">
               <a href="/cart"><i class="bi bi-cart"></i><a>
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Hi, {{ auth()->user()->nama_lengkap }} 
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </div>
            </div>
        @else
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="/login" class="btn btn-outline-success my-2 my-sm-0">Login</a>
                </li>
            </ul>
        @endauth
    </nav>
    <div class="title">
        <h1>Cart</h1>
    </div>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach(session('cart') as $id => $item)
            <tr>
                <td>{{ $item['name'] }}</td>
                <td>Rp{{ $item['price'] }}</td>
                <td>
                    <form action="/updateQuantity/{{ $id }}" method="POST">
                        @csrf
                        <button type="submit" name="action" value="decrease">-</button>
                        {{ $item['quantity'] }}
                        <button type="submit" name="action" value="increase">+</button>
                    </form>
                </td>
                <td>Rp{{ $item['price'] * $item['quantity'] }}</td>
                <td>
                    <form action="/removeItem/{{ $id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Remove</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
