<div class="modal fade" id="form" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Materai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="" class="form-horizontal">
                    <div class="form-group row mt-2">
                        <label for="nominal" class="col-md-2 col-form-label">Nominal</label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="nominal" name="nominal" onkeyup="valueing()">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="rp_materai" class="col-md-2 col-form-label">RP Materai </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="rp_materai" id="rp_materai" onkeyup="valueing()">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="" class="col-md-7 col-form-label"> </label>
                        <div class="col-md-5">
                            <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i>
                                Simpan</button>
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-undo"></i>
                                Batal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>