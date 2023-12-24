<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="{{ route('admin.produks.update', ['id' => $produk->id_produk]) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <label for="nama_Produk">Nama produk</label>
        <input type="text" name="nama_Produk" id="nama_Produk" value="{{ $produk->nama_Produk }}">
        
        <label for="deskripsi">Deskripsi</label>
        <input type="text" name="deskripsi" id="deskripsi" value="{{ $produk->deskripsi }}">
        
        <label for="stok">Stok</label>
        <input type="number" name="stok" id="stok" value="{{ $produk->stok }}">
        
        <label for="harga">Harga</label>
        <input type="number" name="harga" id="harga" value="{{ $produk->harga }}">
        
        <label for="gambar">Gambar</label>
        <input type="text" name="gambar" id="gambar" value="{{ $produk->gambar }}">
        
        <label for="id_kategori">Kategori</label>
        <select name="id_kategori" id="id_kategori">
            @foreach ($kategori as $item)
                <option value="{{ $item->id_kategori }}" @if ($item->id_kategori == $produk->id_kategori) selected @endif>{{ $item->nama_kategori }}</option>
            @endforeach
        </select>
    
        <button type="submit">Kirim</button>
    </form>
    
</body>
</html>