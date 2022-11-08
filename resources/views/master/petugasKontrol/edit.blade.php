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
                <form action="" class="form-horizontal" id="form-edit" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kode_petugas">Kode Petugas</label>
                        <input type="text" class="form-control" id="kd_ptgktrl1" name="kd_ptgktrl" >
                    </div>
                    <div class="form-group">
                        <label for="nip">Nip Pegawai</label>
                        <input type="text" class="form-control" id="nip1" name="nip" readonly value="" >
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Pegawai</label>
                        <input type="text" class="form-control" id="nama1" name="nama" readonly value=""  >
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="is_satgas" id="is_satgas">
                        <label class="col-form-label" for="is_satgas">Is Satgas</label>
                    </div>
                    <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i> Simpan</button>
                    <button type="cancel" class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>
