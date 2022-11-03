<div class="modal fade" id="pelanggan" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cari Pelanggan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('cariPelanggan') }}" method="POST" class="form-horizontal mr-3" id="f-pelanggan">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-2">
                            <input type="checkbox" id="no_pelanggan_c" name="no_pelanggan_c">
                            <label class="col-form-label col-form-label-sm" for="nama">No Pelanggan</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control form-control-sm" id="no_pelanggan" name="no_pelanggan" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <input type="checkbox" id="nama_c" name="nama_c">
                            <label class="col-form-label col-form-label-sm" for="nama">Nama</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control form-control-sm" id="nama" name="nama" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <input type="checkbox" id="no_pa_c" name="no_pa_c">
                            <label class="col-form-label col-form-label-sm" for="nama">No Pa</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control form-control-sm" id="no_pa" name="no_pa" disabled>
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
                                    <input type="text" class="col-md-10 ml-n3 form-control form-control-sm" id="jalan" name="jalan" disabled>
                                </div>
                                <div class="col-md-12 row mt-3">
                                    <label class="col-md-2 col-form-label col-form-label-sm" for="gang">Gang</label>
                                    <input type="text" class="col-md-2 ml-n3 form-control form-control-sm" id="gang" name="gang" disabled>
                                    <label class="col-md-1 col-form-label col-form-label-sm" for="no">No</label>
                                    <input type="text" class="col-md-2 form-control form-control-sm" id="no" name="no" disabled>
                                    <label class="col-md-3 col-form-label col-form-label-sm" for="no_tambahan">No Tambahan</label>
                                    <input type="text" class="col-md-2 form-control form-control-sm" id="no_tambahan" name="no_tambahan" disabled>
                                </div>
                                <div class="col-md-12 row mt-1 ml-1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success btn-sm cari" type="submit">
                        <i class="fas fa-search"></i> Cari
                    </button>
                    <button class="btn btn-danger btn-sm">
                        <i class="fas fa-undo"></i> Kembali
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
