<div class="modal fade" id="edit" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Telpon Pelanggan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="nama" class="col-md-2 col-form-label">Nama</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="nama" onkeyup="valueing()">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
                        <div class="col-md-8">
                            <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nomor" class="col-md-2 col-form-label">No Telepon</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="notlp" name="notlp" onkeyup="valueing()">
                        </div>
                    </div>
                    <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i> Simpan</button>

                </form>
            </div>
        </div>
    </div>
</div>
