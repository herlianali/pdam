<div class="modal fade" id="edit" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Pelanggan Meter C</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" class="form-horizontal" id="form-edit" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="no_pelanggan">No Pelanggan</label>
                        <input type="text" class="form-control" id="no_plg" name="no_plg" readonly
                            value="">
                    </div>
                    <div class="form-group">
                        <label for="ptgs_entri">Petugas Entri</label>
                        <input type="text" class="form-control" id="ptgentri" name="ptgentri" readonly
                            value="">
                    </div>
                    <div class="form-group">
                        <label for="tgl_entry">Tanggal Entri</label>
                        <input type="text" class="form-control" id="tgl_entry" name="tgl_entry" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="aktif">Aktif</label>
                        <input type="checkbox" name="aktif" id="aktif">
                    </div>

                    <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i> Simpan</button>
                    <button type="cancel" class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>
