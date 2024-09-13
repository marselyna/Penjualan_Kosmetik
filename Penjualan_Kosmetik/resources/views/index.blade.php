<!DOCTYPE html>
<html>
<head>
    <title>Kosmetik Shop</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Selamat datang di Kosmetik Shop</h1>
    <ul>
        @foreach($products as $product)
            <li>
                <a href="{{ route('product', $product->id) }}">{{ $product->name }}</a>
                - Rp {{ number_format($product->price, 2, ',', '.') }}
                <a href="{{ route('add_to_cart', $product->id) }}">Tambah ke Keranjang</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('cart') }}">Lihat Keranjang</a>
</body>
</html>
