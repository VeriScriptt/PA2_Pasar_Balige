@extends('template.master')
@section('master')
<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Tank Top T-Shirt</strong></div>
    </div>
  </div>
</div>  

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="{{ asset('images/produk/' . $produk->gambar_produk) }}" alt="Image" class="img-fluid">
      </div>
      <div class="col-md-6">
        <h2 class="text-black">{{ $produk->nama_produk }}</h2>
        <p>{{ $produk->deskripsi }}</p> <!-- Ganti placeholder dengan deskripsi produk -->
        <p class="mb-4">Stok: {{ $produk->stok }}</p>
        <p><strong class="text-primary h4">Rp.{{ $produk->harga }}</strong></p>
        <!-- Opsi Ukuran -->
        <!-- Input Kuantitas -->
        <div class="mb-5">
          <!-- Input Kuantitas -->
        </div>
        <form action="{{ route('cart.add') }}" method="POST">
          @csrf
          <input type="hidden" name="produk_id" value="{{ $produk->produk_id }}">
          <input type="number" name="quantity" value="1" min="1">
          <button type="submit" class="buy-now btn btn-sm btn-primary">Add To Cart</button>
      </form>      
    </div>
    </div>
  </div>
</div>


{{-- Profil Toko --}}
<div class="store-profile">
  <div class="store-details">
    <div class="store-image">
      <img src="{{ asset($penjual->gambar_toko) }}" alt="Store Logo" class="img-fluid">
    </div>
      <div class="store-info">
        <h4>{{ $penjual->nama_toko }}</h4> <!-- Tampilkan nama toko -->
        <p>{{ $penjual->lantai_toko }}</p> <!-- Tampilkan lantai toko -->
        <div class="store-badges">
          <span class="badge badge-primary">{{ $penjual->nomor_telepon }}</span> <!-- Tampilkan peran penjual -->
        </div>
      </div>
      
    </div>
  <div class="store-actions">
    <a href="{{ route('toko.show', $penjual->user_id) }}" class="btn btn-sm btn-outline-primary">Kunjungi Toko</a>
    <a href="{{ route('toko') }}" class="btn btn-sm btn-primary">Chat Sekarang</a>
  </div>
</div>


{{-- Other Products --}}

<div class="site-section block-3 site-blocks-2 bg-light">
<div class="container">
<div class="row justify-content-center">
  <div class="col-md-7 site-section-heading text-center pt-4 mb-5">
    <h2>Other Products</h2>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="row">
      @foreach ($otherProducts as $produk)
      <div class="col-md-3 mb-4">
          <div class="card">
              <img src="{{ asset('images/produk/' . $produk->gambar_produk) }}" alt="{{ $produk->nama_produk }}" class="card-img-top">
              <div class="card-body">
                  <h5 class="card-title">{{ $produk->nama_produk }}</h5>
                  <p class="card-text">Harga: Rp. {{ number_format($produk->harga, 2) }}</p>
                  <p class="card-text">Stok: {{ $produk->stok }}</p>
                  <a href="#" class="btn btn-primary">Lihat Produk</a>
              </div>
          </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12 text-center">
    <a href="{{ route('shop') }}" class="btn btn-primary">Lihat Lainnya</a>
  </div>
</div>
</div>
</div>

@endsection