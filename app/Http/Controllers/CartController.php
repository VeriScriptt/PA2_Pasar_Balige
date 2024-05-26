<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::with('produk')
            ->where('user_id', Auth::id())
            ->orderByDesc('created_at')
            ->get();
    
        $filteredCarts = $carts->filter(function ($cart) {
            $product = Produk::where('produk_id', $cart->produk_id)->first();
            return $product && $product->is_hidden === 0;
            
        });
        $cartItemCount = $filteredCarts->count();
        return view('layouts.cart', compact('filteredCarts'));
    }




    

    public function addToCart(Request $request)
    {
        $produk = Produk::findOrFail($request->produk_id);

        $cart = Cart::where('user_id', Auth::id())
            ->where('produk_id', $produk->produk_id)
            ->first();

            if ($cart) {
                // Jika produk sudah ada di cart
                $cart->quantity += $request->quantity;
                $cart->produk_id = $produk->produk_id; // Tambahkan baris ini
                $cart->save();
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'produk_id' => $produk->produk_id,
                'nama_produk' => $produk->nama_produk,
                'harga' => $produk->harga,
                'quantity' => $request->quantity,
                'gambar_produk' => $produk->gambar_produk,
            ]);
        }

        $carts = Cart::with('produk')->where('user_id', Auth::id())->get();
        $filteredCarts = [];
    
        foreach ($carts as $cart) {
            $product = Produk::where('produk_id', $cart->produk_id)->first();
            if ($product && $product->is_hidden === 0) {
                $filteredCarts[] = $cart;
            }
        }
    
        // return view('layouts.cart', compact('filteredCarts'));
        return Redirect::route('cart.index');
    }

    public function remove(Cart $cart)
    {
        $cart->delete();
        return redirect()->route('cart.index')->with('success', 'Item berhasil dihapus dari keranjang.');
    }
    
}
