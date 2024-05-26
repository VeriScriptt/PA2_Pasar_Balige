@extends('template.master')
@section('master')
<style>
.site-wrap {
    padding-top: 60px !important; /* Ganti 100px dengan tinggi navbar Anda */
}
/* body {
    background-color: #eee;
} */

/* .mt-100 {
    margin-top: 100px;
} */

.card {
    border-radius: 7px !important;
    border-color: #e1e7ec;
    max-width: 300px; /* Set maximum width for cards */
    max-height: 400px; /* Set maximum height for cards */
    margin: 0 auto; /* Center align the card if it has a max-width */
}

.mb-30 {
    margin-bottom: 30px !important;
}

.card-img-tiles {
    display: block;
    border-bottom: 1px solid #e1e7ec;
}

a {
    color: #0da9ef;
    text-decoration: none !important;
}

.card-img-tiles>.inner {
    display: table;
    width: 100%;
}

.card-img-tiles .main-img, .card-img-tiles .thumblist {
    display: table-cell;
    width: 65%;
    padding: 15px;
    vertical-align: middle;
}

.card-img-tiles .main-img>img:last-child, .card-img-tiles .thumblist>img:last-child {
    margin-bottom: 0;
}

.card-img-tiles .main-img>img, .card-img-tiles .thumblist>img {
    display: block;
    width: 100%;
    margin-bottom: 6px;
    max-height: 200px; /* Set maximum height for images */
    object-fit: cover; /* Ensures the image covers the container without distortion */
}

.thumblist {
    width: 35%;
    border-left: 1px solid #e1e7ec !important;
    display: table-cell;
    width: 65%;
    padding: 15px;
    vertical-align: middle;
}

.card-img-tiles .thumblist>img {
    display: block;
    width: 100%;
    margin-bottom: 6px;
    max-height: 200px; /* Set maximum height for images */
    object-fit: cover; /* Ensures the image covers the container without distortion */
}

.btn-group-sm>.btn, .btn-sm {
    padding: .45rem .5rem !important;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem;
}

/* Custom CSS for 5 columns */
.col-lg-2_4 {
    flex: 0 0 20%;
    max-width: 20%;
}
@media (max-width: 1200px) {
    .col-lg-2_4 {
        flex: 0 0 25%;
        max-width: 25%;
    }
}
@media (max-width: 992px) {
    .col-lg-2_4 {
        flex: 0 0 33.3333%;
        max-width: 33.3333%;
    }
}
@media (max-width: 768px) {
    .col-lg-2_4 {
        flex: 0 0 50%;
        max-width: 50%;
    }
}
@media (max-width: 576px) {
    .col-lg-2_4 {
        flex: 0 0 100%;
        max-width: 100%;
    }
}
</style>
<div class="site-wrap">

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('assets/images/hero_1.jpg') }}" alt="First slide" />
        <div class="carousel-caption d-none d-md-block">
          <h5>Finding Your Perfect Shoes</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
          <a href="#" class="btn btn-sm btn-primary">Shop Now</a>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('assets/images/cloth_1.jpg') }}" alt="second slide" />
        <div class="carousel-caption d-none d-md-block">
          <h5>Finding Your Perfect Shoes</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
          <a href="#" class="btn btn-sm btn-primary">Shop Now</a>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('assets/images/cloth_2.jpg') }}" alt="second slide" />
        <div class="carousel-caption d-none d-md-block">
          <h5>Finding Your Perfect Shoes</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
          <a href="#" class="btn btn-sm btn-primary">Shop Now</a>
        </div>
      </div>
      <!-- Add more carousel items here if needed -->
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="jarak"></div>
  <!-- KATEGORI TANPA CAROUSEL -->


  {{-- <div class="container text-center">
      @if(isset($kategori))
          <div class="row">
              <div class="col-lg-12 col-md-4 col-sm-6 border kategori">
                  <a href="#">
                      <img src="{{ asset('images/kategori/'.$kategori->foto) }}" alt="Foto Kategori" width="100">
                  </a>
                  <div style="text-align: center; padding: 10px">
                      <h2 style="margin: 0; color: black; font-size: 12px">{{ $kategori->nama_kategori }}</h2>
                  </div>
              </div>
          </div>
     @endif --}}
  </div>
  <div class="container text-center">
      @foreach ($kategori as $kat)
      <div class="row">
          <div class="col-lg-12 col-md-4 col-sm-6 border kategori">
            <a href="#">
                <img src="{{ asset('images/kategori/'.$kat->foto) }}" alt="Foto Kategori" width="100">
            </a>
            <div style="text-align: center; padding: 10px">
                <h2 style="margin: 0; color: black; font-size: 12px">{{ $kat->nama_kategori }}</h2>
            </div>
          </div>
      </div>
      @endforeach
  </div>


  <!-- List Produk -->
  <div class="site-section block-3 site-blocks-2 bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 site-section-heading text-center pt-4">
          <h2>Produk Kami</h2>
        </div>
      </div>
      <div class="site-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-12 order-2">
              <div class="row mb-5">
                @foreach ($produk->where('is_hidden', false) as $produks)
                <!-- Sample product cards with responsive column classes -->
                <div class="col-md-4 col-sm-6 col-lg-2_4 mb-30">
                  <div class="card">
                    <a class="card-img-tiles" href="#" data-abc="true">
                      <div class="inner">
                        <div class="main-img">
                          <img src="{{ asset('images/produk/' . $produks->gambar_produk) }}" alt="Category">
                        </div>
                      </div>
                    </a>
                    <div class="card-body text-center">
                      <h4 class="card-title">{{$produks->nama_produk}}</h4>
                      <p class="text-muted">{{$produks->harga}}</p>
                      <a class="btn btn-outline-primary btn-sm" href="shop_detail/{{$produks->produk_id}}" data-abc="true">View Products</a>
                    </div>
                  </div>
                </div>
                @endforeach

                <!-- Repeat similar blocks for other products to fill up the row -->
                <!-- ... -->
              </div>
              <div class="row" data-aos="fade-up">
                <div class="col-md-12 text-center">
                  <a href="produk.html" class="btn btn-primary btn-lg">Lihat Lainnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
