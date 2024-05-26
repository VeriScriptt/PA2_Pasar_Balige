@extends('template.master')
@section('master')

<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">{{ $penjual->nama_toko }}</strong></div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img src="{{ asset($penjual->gambar_toko) }}" alt="Logo Toko" class="img-fluid">
        </div>
        <div class="col-md-9">
            <h2>{{ $penjual->nama_toko }}</h2>
            <p><i class="fas fa-check-circle text-success"></i> Seller Terpercaya</p>
            <p><i class="fas fa-map-marker-alt"></i> {{ $penjual->lantai_toko }}</p>
            <p><i class="fas fa-phone"></i> {{ $penjual->nomor_telepon }}</p>
            <a href="#" class="btn btn-primary">Chat Sekarang</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-user"></i> Terakhir Online</h5>
                    <p class="card-text">13 jam lalu</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-box"></i> Jumlah produk</h5>
                    <p class="card-text">{{ $produks->count() }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-star"></i> Penilaian</h5>
                    <p class="card-text">4.8</p> <!-- Placeholder, Anda bisa menggantinya dengan data nyata -->
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-calendar-alt"></i> Bergabung</h5>
                    <p class="card-text">{{ $penjual->created_at->format('d M Y') }}</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <h3>Produk-Produk</h3>

    <div class="d-flex mb-4">
        <div class="dropdown mr-1 ml-md-auto">
            <div class="btn-group float-right">
                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Atur</button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuReference">
                    <a class="dropdown-item" href="#">Relevance</a>
                    <a class="dropdown-item" href="#">Name, A to Z</a>
                    <a class="dropdown-item" href="#">Name, Z to A</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Price, low to high</a>
                    <a class="dropdown-item" href="#">Price, high to low</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($produks as $produk)
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('images/produk/' . $produk->gambar_produk) }}" alt="{{ $produk->nama_produk }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $produk->nama_produk }}</h5>
                    <p class="card-text">{{ $produk->deskripsi }}</p>
                    <a href="/shop_detail/{{ $produk->produk_id }}" class="btn btn-primary">Lihat Produk</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <a href="{{ route('shop') }}" class="btn btn-primary">Lihat Lainnya</a>
        </div>
    </div>
</div>
@endsection
