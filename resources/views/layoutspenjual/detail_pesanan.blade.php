<div class="modal fade" id="detailPesananModal" tabindex="-1" role="dialog" aria-labelledby="detailPesananModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailPesananModalLabel">Detail Pesanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama Pemesan</th>
                            <th>Produk Pesanan</th>
                            <th>Harga Produk</th>
                            <th>Jumlah</th>
                            <th>Total Harga</th>
                            <th>Alamat Pembeli</th>
                            <th>Kontak Pembeli</th>
                            <th>Bukti Transaksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Pembeli 1</td>
                            <td>Celana no 1</td>
                            <td>50000</td>
                            <td>2</td>
                            <td>100000</td>
                            <td>Balige</td>
                            <td>084858453</td>
                            <td>
                                <img src= "{{ asset('admin_assets/img/img1.jpg') }}" style="max-width: 100px;"  >
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
