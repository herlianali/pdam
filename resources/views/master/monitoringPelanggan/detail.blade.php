<div class="modal fade" id="form" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Info Pelanggan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" class="form-horizontal" id="form-detail" method="POST">
                @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <h6><b>Adminisatratif</b></h6>
                        <div class="col-md-1"></div>
                    <table>
                        <tr>
                            <td>No Pelanggan</td>
                            <td><input type="text" class="form-control" id="no_plg" disabled></td>&nbsp;
                            <td>Zona</td>
                            <td><input type="text" class="form-control" id="zona" disabled></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" class="form-control" id="nama" name="nama" disabled></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><input type="text" class="form-control" id="alamat" name="alamat" disabled></td>
                        </tr>
                        <tr>
                            <td>Dengan Alamat</td>
                            <td><input type="text" class="form-control" id="dalamat" name="dalamat" disabled></td>
                        </tr>
                        <tr>
                            <td>No. Telp</td>
                            <td><input type="text" class="form-control" id="no" name="no" disabled></td>
                        </tr>
                        <tr>
                            <td>Kec/Kel</td>
                            <td><input type="text" class="form-control" id="kec" name="kec" disabled></td>&nbsp;
                            <td>Wilayah</td>
                            <td><input type="text" class="form-control" id="wil" name="wil" disabled></td>
                        </tr>
                        <tr>
                            <td>Jenis Pelanggan</td>
                            <td><input type="text" class="form-control" id="jnsplg" name="jnsplg" disabled></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td><input type="text" class="form-control" id="status" name="status" disabled></td>
                        </tr>
                        <tr>
                            <td>Jenis Tarif</td>
                            <td><input type="text" class="form-control" id="jnstarif" name="jnstarif" disabled></td>&nbsp;
                            <td>Guna Persil</td>
                            <td><input type="text" class="form-control" id="gunapersil" name="gunapersil" disabled></td>
                        </tr>
                        <tr>
                            <td>No PA</td>
                            <td><input type="text" class="form-control" id="nopa" name="nopa" disabled></td>&nbsp;
                            <td>No Bundel</td>
                            <td><input type="text" class="form-control" id="no_bundel" name="no_bundel" disabled></td>
                        </tr>
                        <tr>
                            <td>Bulan Akhir</td>
                            <td><input type="text" class="form-control" id="bln" name="bln" disabled></td>&nbsp;
                            <td>Retribusi</td>
                            <td><input type="text" class="form-control" id="ret" name="ret" disabled></td>
                        </tr>
                        <tr>
                            <td>Tgl. Tutup</td>
                            <td><input type="text" class="form-control" id="tgltutup" name="tgltutup" disabled></td>&nbsp;
                            <td>Tgl. Buka</td>
                            <td><input type="text" class="form-control" id="tglbuka" name="tglbuka" disabled></td>
                        </tr>
                    </table>
                    <hr style="width: 100%">
                    <h6><b>Teknis</b></h6>
                    <div class="col-md-1"></div>
                    <table>
                        <tr>
                            <td>No Meter</td>
                            <td><input type="text" class="form-control" id="nometer" name="nometer" disabled></td>&nbsp;
                            <td>Ukuran Meter</td>
                            <td><input type="text" class="form-control" id="ukmeter" name="ukmeter" disabled></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pasang</td>
                            <td><input type="text" class="form-control" id="tglpasang" name="tglpasang" disabled></td>
                        </tr>
                        <tr>
                            <td>Meter Akhir</td>
                            <td><input type="text" class="form-control" id="meterakhir" name="meterakhir" disabled></td>&nbsp;
                            <td>Rata-rata Pakai</td>
                            <td><input type="text" class="form-control" id="rata" name="rata" disabled></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
