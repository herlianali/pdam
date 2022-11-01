<div class="modal fade" id="pengaduan" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cari Pengaduan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" class="form-horizontal mr-3">
                    <div class="form-group row">
                        <div class="col-md-2">
                            <input type="checkbox" id="no_pengaduan_c" name="no_pengaduan_c">
                            <label class="col-form-label col-form-label-sm" for="nama">No Pengaduan</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control form-control-sm" id="no_pengaduan" name="no_pengaduan" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <input type="checkbox" id="nama_c_p" name="nama_c">
                            <label class="col-form-label col-form-label-sm" for="nama">Nama</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control form-control-sm" id="nama_p" name="nama_p" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <input class="" type="checkbox" id="alamat_c" name="alamat_c">
                            <label class="col-form-label col-form-label-sm" for="nama">Alamat</label>
                        </div>
                        <div class="card col-md-8">
                            <div class="card-body">
                                <div class="col-md-12 row">
                                    <label class="col-md-2 col-form-label col-form-label-sm" for="nama">Jalan</label>
                                    <input type="text" class="col-md-10 ml-n3 form-control form-control-sm" id="jalan_p" name="jalan_p" >
                                </div>
                                <div class="col-md-12 row mt-3">
                                    <label class="col-md-2 col-form-label col-form-label-sm" for="gang">Gang</label>
                                    <input type="text" class="col-md-2 ml-n3 form-control form-control-sm" id="gang_p" name="gang_p" >
                                    <label class="col-md-1 col-form-label col-form-label-sm" for="no">No</label>
                                    <input type="text" class="col-md-2 form-control form-control-sm" id="no_p" name="no_p" >
                                    <label class="col-md-3 col-form-label col-form-label-sm" for="no_tambahan_p">No Tambahan</label>
                                    <input type="text" class="col-md-2 form-control form-control-sm" id="no_tambahan_p" name="no_tambahan_p" >
                                </div>
                                <div class="col-md-12 row mt-1 ml-1">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
