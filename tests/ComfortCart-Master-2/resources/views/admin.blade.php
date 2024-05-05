<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <section>
        <a href="/add-product" type="button" class="btn btn-primary">Add Product</a>
    </section>

    <section>
        <p>List Product</p>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nama Produk</th>
                <th scope="col">Gambar</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($list_product as $product)
                <tr>
                    {{-- <th scope="row">1</th> --}}
                    <td>{{$product->nama_produk}}</td>
                    <td>
                        <img src="{{asset('storage/'.$product->gambar_produk_path)}}" style="width: 20%" alt="">
                    </td>
                    <td>{{$product->deskripsi_produk}}</td>
                    <td>{{$product->harga_produk}}</td>
                    <td>{{$product->stok_produk}}</td>
                    <th>
                        <form action="/delete-product/{{$product->id}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </th>
                    <th><a type="button" class="btn btn-success" href="/edit-product-page/{{$product->id}}">Edit</a></th>
                </tr>
                @endforeach
            </tbody>
          </table>
    </section>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>