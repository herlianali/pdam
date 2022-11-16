<div class="modal fade" id="edit" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Petugas Korektor</h5>
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
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="nipE" name="nipE" readonly>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="nama" class="col-md-2 col-form-label">Nama</label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="namaE" name="namaE" readonly>
                        </div>
                    </div>

                    <div class="form-group row mt-2 ">
                        <label for="jabatan" class="col-md-2 col-form-label">Jabatan</label>
                        <div class="col-md-7">
                            <select name="jabatanE" id="jabatanE" class="form-control">
                                <option value="0">Konektor</option>
                                <option value="1">Senior Staf</option>
                                <option value="2">Supervisor</option>
                            </select>

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
                            <button type="cancel" class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Batal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

