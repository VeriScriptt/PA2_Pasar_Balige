<!DOCTYPE html>
<html lang="en">
<head>
    <title>Partiga - tiga</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <style>
        /* CSS for Search Results */
        #searchResults {
            position: absolute;
            width: 100%;
            background-color: #fff;
            border: 1px solid #ddd;
            z-index: 999;
            margin-top: 38px; /* Adjust as needed */
        }
    </style>
    
    
</head>
<body>
    <div class="site-wrap">
        <header class="site-navbar" role="banner">
            <div class="site-navbar-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                            <form class="site-block-top-search">
                                <span class="icon icon-search2"></span>
                                <input type="text" id="searchInput" class="form-control border-0" placeholder="Search">
                            </form>
                            <div id="searchResults"></div> <!-- Search results will be displayed here -->
                        </div>
                        

                        <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                            <div class="site-logo">
                                <a href="{{ route('home') }}" class="js-logo-clone">Balige</a>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                            <div class="site-top-icons">
                                <ul>
                                    @guest
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    |&nbsp;
                                    <li><a href="{{ route('register') }}">Daftar</a></li>&nbsp;
                                    @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            <span class="icon icon-person"></span>
                                            {{ Auth::user()->name }}
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="/profile">Profile</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                    @endguest
                                    
                                    <li>
                                        <a href="{{ route('cart.index') }}" class="site-cart">
                                            <span class="icon icon-shopping_cart"></span>
                                            {{-- <span class="count">{{ $filteredCarts->count() }}</span> --}}
                                        </a>
                                    </li>
                                    <li class="d-inline-block d-md-none ml-md-0">
                                        <a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('master')

        <footer class="site-footer border-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="footer-heading mb-4">Navigations</h3>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <ul class="list-unstyled">
                                    <li><a href="#">Sell online</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Shopping cart</a></li>
                                    <li><a href="#">Store builder</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <ul class="list-unstyled">
                                    <li><a href="#">Mobile commerce</a></li>
                                    <li><a href="#">Dropshipping</a></li>
                                    <li><a href="#">Website development</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <ul class="list-unstyled">
                                    <li><a href="#">Point of sale</a></li>
                                    <li><a href="#">Hardware</a></li>
                                    <li><a href="#">Software</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <h3 class="footer-heading mb-4">Promo</h3>
                        <a href="#" class="block-6">
                            <img src="images/hero_1.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
                            <h3 class="font-weight-light mb-0">Finding Your Perfect Shoes</h3>
                            <p>Promo from nuary 15 &mdash; 25, 2019</p>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="block-5 mb-5">
                            <h3 class="footer-heading mb-4">Contact Info</h3>
                            <ul class="list-unstyled">
                                <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                                <li class="email">emailaddress@domain.com</li>
                            </ul>
                        </div>

                        <div class="block-7">
                            <form action="#" method="post">
                                <label for="email_subscribe" class="footer-heading">Subscribe</label>
                                <div class="form-group">
                                    <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                                    <input type="submit" class="btn btn-sm btn-primary" value="Send">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <p>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    
    <script>
        function deleteItem(cartId) {
    if (confirm('Apakah anda yakin ingin menghapus?')) {
        // Membuat permintaan POST menggunakan JavaScript
        fetch("{{ route('cart.remove', ':cartId') }}".replace(':cartId', cartId), {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                _method: 'DELETE'
            })
        })
        .then(response => {
            if (response.ok) {
                // Jika penghapusan berhasil, Anda dapat melakukan sesuatu seperti memperbarui tampilan
                location.reload();
            } else {
                alert('Terjadi kesalahan saat menghapus item.');
            }
        })
        .catch(error => {
            alert('Terjadi kesalahan saat menghapus item.');
            console.error(error);
        });
    }
}

        $(document).ready(function() {
            $('#searchInput').on('keyup', function() {
                var query = $(this).val();
                $.ajax({
                    url: "{{ route('search') }}",
                    type: "GET",
                    data: {'query': query},
                    success: function(data) {
                        $('#searchResults').html(data);
                    }
                });
            });
        });
    </script>
    
</body>
</html>
