<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
    <title>Comfycart</title>
  </head>
  <body>
    <header>
      <nav class="main-nav flx-row">
        <ul class="flx-row nav-item" role="list">
          <li><a href="">Men</a></li>
          <li><a href="">Woman</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Contact</a></li>
        </ul>

        <img class="nav-item" src="asset/cat.png" alt="" />
        @auth
        <ul class="flx-row nav-item" role="list">
          <li><a href="">Wishlist</a></li>
          <li><a href="">Cart</a></li>
          <li class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: transparent; color: black;">
              {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              @if(auth()->user()->role === 'admin')
                <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
              @endif
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="POST">
                  @csrf
                    <button type="submit" class="dropdown-item"> Logout</button>
                </form>
            </ul>
          </li>
        </ul>
        @else
        <ul class="flx-row nav-item" role="list">
          <li><a href="login">Login</a></li>
          <li><a href="">Wishlist</a></li>
          <li><a href="">Cart</a></li>
        </ul>
        @endauth
      </nav>
    </header>

    <main class="flx-col">
      <span class="graphic1"><img src="asset/bubble1.png" alt="" /></span>
      <span class="graphic2"><img src="asset/bubble2.png" alt="" /></span>
      <section class="motto flx-col">
        <h1>
          Quality meets style<br />
          with feline finesse.
        </h1>
        <p>
          Our Garments, Woven with Whiskered<br />Precision and Hat-tastic
          Flair, Promise a<br />
          Purrmanence of Quality and Durability.
        </p>

        <img src="asset/panah_bawah.png" alt="" />
      </section>

      <section class="kategori flx-col">
        <div class="gender flx-row">
          <button>Men</button>
          <button>Women</button>
        </div>

        <div class="list-kategori flx-row">
          <ul class="flx-row" role="list">
            <li><a href="">All</a></li>
            <li><a href="">Sweatshirts</a></li>
            <li><a href="">Knitwear</a></li>
            <li><a href="">Polo Shirts</a></li>
            <li><a href="">T-shirts</a></li>
            <li><a href="">Shirts</a></li>
            <li><a href="">Trousers</a></li>
            <li><a href="">Hats</a></li>
          </ul>
        </div>
      </section>
      <div class="catalog">
        <div>
            <img src="asset/1. On Sale.png" alt="" />
        </div>
        <div class="catalog-1">
            @foreach($discountProducts as $product)
            <div class="product-item">
                <img src="{{ asset('storage/' . $product->gambar_produk_path) }}" alt="{{ $product->nama_produk }}" />
                <p class="produk">{{ $product->nama_produk }}</p>
                <div class="price">
                    <div class="original-price">
                        <p><s>Rp {{ number_format($product->harga_produk, 0, ',', '.') }}</s></p>
                    </div>
                    @php
                        $discounted = $product->harga_produk / 100 * 75;
                    @endphp
                    <div class="discounted-price">
                        <p class="diskon">Rp {{ number_format($discounted, 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

        <div class="catalog22">
    <div>
        <img src="asset/2. Newest Product.png" alt="" />
    </div>
    <div class="catalog-1">
        @foreach($newestProducts as $product)
        <div class="product-item">
            <img src="{{ asset('storage/' . $product->gambar_produk_path) }}" alt="{{ $product->nama_produk }}" />
            <p class="produk">{{ $product->nama_produk }}</p>
            <div class="price">
                <p> Rp {{ number_format($product->harga_produk, 0, ',', '.') }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>


        <div class="catalasto">
          <div>
            <img src="asset/3. Other Product.png" alt="" />
          </div>
          <div class="catalog-1">
            @foreach($randomProducts as $product)
            <div class="product-item">
                <img src="{{ asset('storage/' . $product->gambar_produk_path) }}" alt="{{ $product->nama_produk }}" />
                <p class="produk">{{ $product->nama_produk }}</p>
                <div class="price">
                    <p> Rp {{ number_format($product->harga_produk, 0, ',', '.') }}</p>
                </div>
            </div>
            @endforeach
        </div>
          </div>

          <section class="footer">
            <div class="footer-content">
              <div class="kucing">
                <img src="asset/catreal.svg" alt="" />
              </div>
              <h2>
                The clothing <br />
                brand for cats <br />with hats.
              </h2>
            </div>

            <div class="footer-content">
              <h4>North America</h4>
              <ul>
                <li><a href="#"><u>catclothingemail@gmail.com</u></a></li>
                <li><a href="#">+1 (555) 123-4567</a></li>
                <li><a href="#">123 Main Street <br /> Cityville, CA 90210 <br /> United States</a></li>
                <li><a href="#"><u>See on Map</u></a></li>
              </ul>
            </div>

            <div class="footer-content">
              <h4>South America</h4>
              <ul>
                <li><a href="#"><u>catclothingemailtwo@gmail.com</u></a></li>
                <li><a href="#">+55 123 456 7890</a></li>
                <li><a href="#">456 Rio Avenue <br /> Sambatown, SA 12345 <br /> Brazil</a></li>
                <li><a href="#"><u>See on Map</u></a></li>
              </ul>
            </div>

      <div class="footer-content">
        <h4>Our Socials</h4>
        <div class="icon">
          <li>
            <a href="#"><img src="asset/instagram.png" alt="" /></a>
          </li>
          <li>
            <a href="#"><img src="asset/facebook.png" alt="" /></a>
          </li>
          <li>
            <a href="#"><img src="asset/twitter.png" alt="" /></a>
          </li>
          <li>
            <a href="#"><img src="asset/email.png" alt="" /></a>
          </li>
          <li>
            <a href="#"><img src="asset/phone.png" alt="" /></a>
          </li>
        </div>
      </div>  
      </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
