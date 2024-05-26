<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Produk;

use App\Models\Kategori;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    // public function index(): View
    // {
    //     //get produks
    //     $produk = Produk::all();

    //     //render view with posts
    //     return view('layouts.index', compact('produk'));
    //     // return view('layouts.index')->with('produk', $produk);

    // }

    public function index(): View
    {
        // Mengambil semua kategori
        $kategori = Kategori::all();

        // Mengambil semua produk
        $produk = Produk::all();

        // Mengirimkan data produk dan kategori ke view
        return view('layouts.index', compact('produk', 'kategori'));
    }

    public function showDetail($id)
    {
        $produk = Produk::findOrFail($id);
        $otherProducts = Produk::where('produk_id', '!=', $id)->where('is_hidden', false)->get();
        
        // Ambil data penjual
        $penjual = User::findOrFail($produk->id_user);

        return view('Layouts.shop_detail', compact('produk', 'otherProducts', 'penjual'));
    }
    
    public function showToko($id)
    {
        $penjual = User::findOrFail($id);
        $produks = Produk::where('id_user', $id)->where('is_hidden', false)->get();

        return view('layouts.toko', compact('penjual', 'produks'));
    }

    // public function show()
    // {
    //     $kategori = Kategori::all();
    //     return view('layouts.index', compact('kategori'));
    // }
    // public function search(Request $request)
    // {
    //     $query = $request->input('query');
    
    //     // Perform the search query using your model (e.g., Produk)
    //     $results = Produk::where('nama_produk', 'like', '%' . $query . '%')
    //                     ->where('is_hidden', false) // Optionally, apply any additional conditions
    //                     ->get();
    
    //     // Render the search results as HTML markup
    //     $html = '';
    //     if ($results->count() > 0) {
    //         foreach ($results as $result) {
    //             // Customize the HTML markup for each search result as needed
    //             $html .= '<div class="product">';
    //             $html .= '<h4>' . $result->nama_produk . '</h4>';
    //             // Add more details if needed
    //             $html .= '</div>';
    //         }
    //     } else {
    //         $html = '<div class="no-results">No results found.</div>';
    //     }
    
    //     return $html;
    // }

    // app/Http/Controllers/ProductController.php
    public function liveSearch(Request $request)
    {
        $query = $request->input('query');
        if ($query) {
            $products = Produk::where('nama_produk', 'like', "%$query%")->get();
        } else {
            $products = [];
        }
    
        $output = '';
        if ($products->count() > 0) {
            foreach ($products as $product) {
                $output .= '<div class="product-result" data-query="' . $product->nama_produk . '">';
                $output .= '<h3>' . $product->nama_produk . '</h3>';
                // $output .= '<img src="' . asset('images/produk/' . $product->gambar_produk) . '" alt="' . $product->nama_produk . '">';
                $output .= '</div>';
            }
        } else {
            $output = '<div class="no-results">No results found.</div>';
        }
    
        return response()->json($output);
    }
    
    
    public function searchResults(Request $request)
{
    $query = $request->input('query');
    $products = Produk::where('nama_produk', 'like', "%$query%")->get();

    return view('search_results', compact('products', 'query'));
}
    

    
    

}
