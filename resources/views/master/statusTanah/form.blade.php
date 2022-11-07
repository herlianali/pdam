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
                <form action="" class="form-horizontal" id="form-edit" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group row mt-2">
                        <label for="status_tanah" class="col-md-2 col-form-label">Status Tanah </label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="status_tanah" name="status_tanah" onkeyup="valueing()">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="keterangan" class="col-md-2 col-form-label">Keterangan </label>
                        <div class="col-md-8">
                            <textarea class="form-control" id="keterangan" name="keterangan" onkeyup="valueing()"></textarea>
                        </div>
                    </div>

                    <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i> Simpan</button>
                    <button type="cancel" class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>
