<div class="modal fade" id="edit" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Koreksi Petugas Korektor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" class="form-horizontal" id="form-edit" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group row mt-2">
                        <label for="nip" class="col-md-2 col-form-label">NIP</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="nip1" name="nip1"
                                onkeyup="valueing()">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="nama" class="col-md-2 col-form-label">Nama</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="nama1" name="nama1"
                                onkeyup="valueing()">
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-default btn-mt-2" type="button"
                                data-toggle="modal"data-target="#cs"><i class="fas fa-search fa-fw"></i> Pilih
                                Pegawai</button>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="recid" class="col-md-2 col-form-label">Recid</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="recid1" name="recid1"
                                onkeyup="valueing()">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="zona" class="col-md-2 col-form-label">Zona</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="zona1" name="zona1"
                                onkeyup="valueing()">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="bundel" class="col-md-2 col-form-label">Bundel</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="no_bundel1" name="no_bundel1"
                                onkeyup="valueing()">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="bundel" class="col-md-2 col-form-label"></label>
                        <div class="col-md-8">
                            <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i> Simpan</button>
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-undo"></i> Batal</button>
                        </div>
                    </div>

                  
                </form>
            </div>
        </div>
    </div>
</div>

@include('master.petugasKorektor.petCs')
