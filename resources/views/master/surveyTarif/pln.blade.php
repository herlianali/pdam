<div class="modal fade" id="pln" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Jalan PLN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" class="form-horizontal">
                    <div class="form-group row mt-2">
                        <label for="nopel" class="col-md-2 col-form-label">Nopel</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="nopel" name="nopel" onkeyup="valueing()" readonly value="">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
                        <div class="col-md-6">
                            <textarea class="form-control" id="keterangan" name="keterangan" value="" readonly value=""></textarea>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="text" class="col-md-2 col-form-label">Jalan</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="jalan" name="jalan" onkeyup="valueing()">
                        </div>
                        <label for="pln" class="col-form-label">PLN</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="pln" onkeyup="valueing()">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <div class="col-md-6">
                            <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i> Simpan</button>
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-undo"></i> Batal</button>
                        </div>
                    </div>
                  
                </form>
            </div>
        </div>
    </div>
</div>
