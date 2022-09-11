<div class="modal fade" id="form" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Status Tanah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" class="form-horizontal">
                    <div class="form-group row mt-2">
                        <label for="kode" class="col-md-2 col-form-label">Kode </label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="kode" name="kode" onkeyup="valueing()">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="keterangan" class="col-md-2 col-form-label">Keterangan </label>
                        <div class="col-md-8">
                            <textarea class="form-control" id="keterangan" name="keterangan" onkeyup="valueing()"></textarea>
                        </div>
                    </div>

                    <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i> Simpan</button>
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-undo"></i> Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>
