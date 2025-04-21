<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    //Ini adalah array asosiatif yang menyimpan data produk secara hardcoded (langsung ditulis dalam kode).
    //Setiap elemen memiliki ID produk sebagai key dan menyimpan name dan price sebagai value.
    private $products = [
        1 => ['name' => 'Kaos Laravel', 'price' => 150000],
        2 => ['name' => 'Stiker Coding', 'price' => 25000],
        3 => ['name' => 'Notebook Dev', 'price' => 50000],
    ];

    //menampilkan daftar produk --index
    public function index()
    {
        $products = &$this->products; //untuk mengambil referensi (meskipun referensi tidak terlalu penting di sini, tanpa & pun akan tetap jalan)
        return view('products/products.index', compact('products')); //Mengembalikan view products.index dan mengirimkan data products ke dalam view tersebut.
    }

    //menampilkan halaman detail produk --show($id)
    public function show($id)
    {
        $product = $this->products[$id] ?? null;
        if (!$product) {
            abort(404);
        } //Jika produk dengan id tersebut tidak ditemukan, maka akan menampilkan error 404 (not found).
        return view('products/products.detail', compact('product')); //Jika ditemukan, produk dikirim ke view products.detail. 
        }

    
}