<div class="modal fade" id="edit" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Petugas Kontrol</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="kode_petugas">Kode Petugas</label>
                        <input type="text" class="form-control" id="kode_petugas" name="kode_petugas" >
                    </div>
                    <div class="form-group">
                        <label for="nip">Nip Pegawai</label>
                        <input type="text" class="form-control" id="nip" name="nip" >
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Pegawai</label>
                        <input type="text" class="form-control" id="nama" name="nama" >
                    </div>
                    <div class="form-group col-md-3">
                        <input type="checkbox" id="is_satgas" name="is_satgas">
                        <label class="col-form-label" for="is_satgas">Is Satgas</label>
                    </div>
                    <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i> Simpan</button>
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-undo"></i> Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>
