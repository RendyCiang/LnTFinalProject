<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel | Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <section>
        <form method="POST" action="/edit-product/{{$product->id}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Edit Nama Produk</label>
                <input type="text" name="nama_produk_input" value="{{$product->nama_produk}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('nama_produk_input')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ubah Gambar Produk</label>
                <input type="file" name="gambar_produk_input" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('gambar_produk_input')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Edit Deskripsi Produk</label>
                <input type="text" name="deskripsi_produk_input" value="{{$product->deskripsi_produk}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('deskripsi_produk_input')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Edit Harga Produk</label>
                <input type="text" name="harga_produk_input" value="{{$product->harga_produk}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('harga_produk_input')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Edit Stok Produk</label>
                <input type="text" name="stok_produk_input" value="{{$product->stok_produk}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('stok_produk_input')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>