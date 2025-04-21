<!DOCTYPE html>
<html>
<head>
    <title>Produk E-Commerce</title>
</head>
<body>
    <h1>Daftar Produk:</h1>
    <ul>
        @foreach($products as $id => $product)
            <li>
                <a href="{{ url('/product/product/detail/' . $id) }}">
                    {{ $product['name'] }} - Rp{{ number_format($product['price'], 0, ',', '.') }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>