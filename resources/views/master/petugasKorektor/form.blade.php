<div class="modal fade" id="form" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Petugas Korektor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" class="form-horizontal">
                    <div class="form-group row mt-2">
                        <label for="nip" class="col-md-2 col-form-label">NIP</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="nip" name="nip"
                                onkeyup="valueing()">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="nama" class="col-md-2 col-form-label">Nama</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="nama" name="nama"
                                onkeyup="valueing()">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="recid" class="col-md-2 col-form-label">Recid</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="recid" name="recid"
                                onkeyup="valueing()">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="zona" class="col-md-2 col-form-label">Zona</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="zona" name="zona"
                                onkeyup="valueing()">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="bundel" class="col-md-2 col-form-label">Bundel</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="bundel" name="bundel"
                                onkeyup="valueing()">
                        </div>
                    </div>

                    <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i> Simpan</button>
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-undo"></i> Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>
