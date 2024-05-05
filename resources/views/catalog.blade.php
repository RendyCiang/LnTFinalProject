<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('CSS/catalog.css') }}">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <h2>ChipiChapa</h2>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Catalog</a></li>
        </ul>
        @auth
            <div class="dropdown ml-auto">
               <a href=""><i class="bi bi-cart"></i><a>
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
    
    
    {{-- About Us --}}
    <div class="home">
        <div class="tagline">
            <h1>We provide everything you need and more,</h1>
            <h3>your one-stop solution for all your needs.</h3>
            <p>ChipiChapa Company</p>
        </div>
    </div>

    <div class="about">
        <div class="slider-container">
            <div class="slider">
                <div class="slide">
                    <h2>About Us</h2>
                    <p>ChipiChapa Company is a  provider of services and products. Founded in 1990, our company has been dedicated to a mission. We pride ourselves on customer focus.</p>
                </div>
                <div class="slide">
                    <h2>Our Team</h2>
                    <p>At ChipiChapa Company, we have a team of dedicated professionals who are committed to delivering the best [services/products] to our customers. Meet some of our key team members:</p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet. - CEO</li>
                        <li>Lorem, ipsum dolor. - CFO</li>
                        <li>Lorem, ipsum. - CPO</li>
                        <li>Lorem, ipsum dolor. - HR</li>
                    </ul>
                </div>
                <div class="slide">
                    <h2>Our Services & Products</h2>
                    <p>We offer a wide range of Services & Products to meet the needs of our customers. We are known for our quality, reliability, and affordability.</p>
                </div>
                <div class="slide">
                    <h2>Our Vision</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur eveniet ab nostrum, ipsam reiciendis dolore commodi modi fuga! Sint eveniet nemo, ullam minima maxime atque molestias aspernatur fuga quia reprehenderit, ipsa quod quibusdam dicta sunt!</p>
                </div>
                <div class="slide">
                    <h2>Why Choose Us?</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit voluptatibus consequuntur delectus illum, tempore voluptatem harum rem ullam? Voluptatibus, delectus.</p>
                </div>
            </div>
            <div class="slider-controls">
                <button class="prev" onclick="prevSlide()">&#9664;</button>
                <button class="next" onclick="nextSlide()">&#9654;</button>
            </div>
        </div>
    </div>

    {{-- Catalog --}}
    <div class="catalog">
        <h2>Catalog</h2>
        <div class="product">
                @forelse($CatalogueData as $data)
                    <div class="product-item">
                        <img src="{{ asset($data->Photo) }}">
                        <h3>Category: {{ $data->kategori }}</h3>
                        <h3>Product Name: {{ $data->nama_barang }}</h3>
                        <h3>Price: Rp{{ $data->harga }}</h3>
                        <h3>Stock: {{ $data->stok }}</h3>
                        @if (Auth::user() && Auth::user()->role == 'admin')
                            <a href="/edit-catalogue/{{ $data->id }}" class="btn btn-success">Edit</a>
                            <form action="/delete-catalogue/{{ $data->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        @else
                        <form action="/add-to-cart/{{ $data->id }}" method="POST">
                            @csrf
                            <a href="/add-order/{{ $data->id }}"><button class="btn btn-warning">Add To Cart</button></a>
                        </form>                        
                        @endif
                    </div>
                @empty
                <div class="text-center">
                    <p>No products available.</p>
                </div>
                @endforelse
        </div>
    </div>
    
    <script src="{{ asset('JS/catalog.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
    </html>