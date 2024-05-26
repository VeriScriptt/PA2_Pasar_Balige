<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Partiga-Tiga</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('admin_assets/css/sb-admin-2.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('../layoutspenjual/sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            @include('../layoutspenjual/navbar')
            <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Pesanan</h1>


                @include('../layoutspenjual/detail_pesanan')
                @include('../layoutspenjual/terima')
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Daftar Pesanan</h6><hr>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama Pemesan</th>
                                        <th>Produk Pesanan</th>
                                        <th>Jumlah</th>
                                        <th>Total Harga</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Pembeli 1</td>
                                        <td>Celana no 1</td>
                                        <td>2</td>
                                        <td>100000</td>
                                        <td>
                                            <img src="{{ asset('admin_assets/img/img3.jpeg') }}" style="max-width: 100px;" onclick="showImage(this.src);">
                                        </td>
                                        <td>
                                            <a class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#detailPesananModal">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-info-circle"></i>
                                                </span>
                                                <span class="text">Detail</span>
                                            </a>
                                            <a class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#exampleModal">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                <span class="text">Terima</span>
                                            </a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                    <div>
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pesanan Diproses</h6><hr>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama Pemesan</th>
                                            <th>Produk Pesanan</th>
                                            <th>Harga Produk</th>
                                            <th>Jumlah</th>
                                            <th>Total Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2</td>
                                            <td>Pembeli 1</td>
                                            <td>Sayur</td>
                                            <td>50000</td>
                                            <td>2</td>
                                            <td>100000</td>
                                            <td>
                                                <a class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#detailPesananModal">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-info-circle"></i>
                                                    </span>
                                                    <span class="text">Detail</span>
                                                </a>
                                                <a class="btn btn-warning btn-icon-split"data-toggle="modal" data-target="#exampleModal1">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-thumbs-up"></i>
                                                    </span>
                                                    <span class="text">Selesai</span></span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>



            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <script>
        function showImage(src) {
            var modal = document.createElement('div');
            modal.innerHTML = '<div style="background-color: rgba(0,0,0,0.7); position: fixed; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;"><img src="' + src + '" style="max-width: 90%; max-height: 90%;"></div>';
            modal.style.cursor = 'pointer';
            modal.onclick = function() { modal.remove(); };
            document.body.appendChild(modal);
        }
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('admin_assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin_assets/js/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/js/sb-admin-2.js') }}"></script>


    <!-- Page level plugins -->
    <script src="{{ asset('admin_assets/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('admin_assets/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('admin_assets/js/demo/chart-pie-demo.js') }}"></script>


</body>

</html>
