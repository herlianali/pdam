<div class="modal fade" id="form" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Guna Pensil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label>Kode Guna Persil</label>
                        <input type="text" class="form-control" id="kode_gnpersil" name="kode_gnpersil" disabled>
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" id="keterangan" onkeyup="valueing()"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Induk</label>
                        <input type="text" class="form-control" id="induk" name="induk">
                    </div>
                    <div class="form-group">
                        <label>Kode Tarif</label>
                        <input type="text" class="form-control" id="kode_tarif" name="kode_tarif">
                    </div>
                    <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i> Simpan</button>
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-undo"></i> Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>
