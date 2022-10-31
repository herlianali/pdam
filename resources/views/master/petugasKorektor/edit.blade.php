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
                    
                    <div class="form-group row mt-2 ">
                        <label for="jabatan" class="col-md-2 col-form-label">Jabatan</label>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="konektor" name="jabatan" value="0">
                                <label class="form-check-label">Konektor</label>
                                <br>
                                <input type="radio" class="form-check-input" id="senior_staf " name="jabatan" value="1">
                                <label class="form-check-label">Senior Staf</label>
                                <br>
                                <input type="radio" class="form-check-input" id="supervisor " name="jabatan" value="2">
                                <label class="form-check-label">Supervisor</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-2 ">
                        <label for="status" class="col-md-2 col-form-label">Status</label>
                        <div class="col-md-3">
                            <input type="checkbox" id="aktif" name="aktif">
                            <label class="col-form-label" for="aktif">Aktif</label>
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
@include('master.petugasKorektor.petCs')
</div>

