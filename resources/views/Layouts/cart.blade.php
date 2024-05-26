@extends('template.master')
@section('master')

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $total = 0;
              @endphp
              
              @if(count($filteredCarts) > 0)
                  @foreach($filteredCarts as $item)
                    @if(!$item->is_hidden)
                    @php
                    $total += $item->harga * $item->quantity;
                @endphp
                <h1>{{ $item->is_hidden }}</h1>
                <tr>
                    <td class="product-thumbnail">
                        <img src="{{ asset('images/produk/' . $item->gambar_produk) }}" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">{{ $item->nama_produk }}</td>
                    <td>Rp.{{ number_format($item->harga, 0, ',', '.') }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>Rp.{{ number_format($item->harga * $item->quantity, 0, ',', '.') }}</td>

                    <td class="product-remove">
                      <a href="#" onclick="deleteItem({{ $item->cart_id }}); return false;" class="btn btn-primary btn-sm">X</a>
                  </td>
                </tr>
                    @endif
                  @endforeach
              @else
                  <tr>
                      <td colspan="6" class="text-center">Tidak ada produk di keranjang.</td>
                  </tr>
              @endif
              
              <tr>
                  <td colspan="4" class="text-right">Total:</td>
                  <td>Rp.{{ number_format($total, 0, ',', '.') }}</td>
                  <td>&nbsp;</td>
              </tr>
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6">
                <a href="{{ route('shop') }}" class="btn btn-outline-primary btn-sm btn-block">Continue Shopping</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">Rp.{{ number_format($total, 0, ',', '.') }}</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">Rp.{{ number_format($total, 0, ',', '.') }}</strong>
                  </div>
                </div>

                <div class="row">
                  {{-- <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='{{ route('checkout') }}'">Checkout</button>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection