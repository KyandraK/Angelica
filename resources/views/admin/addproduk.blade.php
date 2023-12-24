<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="{{route('admin.produks.store')}}" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <label for="nama_Produk">Nama produk</label>
        <input type="text" name="nama_Produk" id="nama_Produk">
        <label for="deskripsi">deskripsi</label>
        <input type="text" name="deskripsi" id="deskripsi">
        <label for="stok">stok</label>
        <input type="number" name="stok" id="stok">
        <label for="harga">harga</label>
        <input type="number" name="harga" id="harga">
        <label for="gambar">gambar</label>
        <input type="text" name="gambar" id="gambar">
        <label for="id_kategori"></label>
            <select name="id_kategori" id="id_kategori">
                @foreach ($kategori as $item)
                    <option value="{{$item->id_kategori}}">{{$item->nama_kategori}}</option>
                @endforeach
            </select>
        <button>Kirim</button>
    </form>
</body>
</html>