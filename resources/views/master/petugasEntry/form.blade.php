<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Petugas Entry</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" class="form-horizontal" id="form-edit" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Kode Petugas</label>
                        <input type="text" class="form-control" id="kd_ptgentry1" name="kd_ptgentry" disabled>
                    </div>
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="text" class="form-control" id="nip1" name="nip" >
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="nama1" name="nama">
                    </div>
                    <div class="form-group">
                        <label> Aktif</label>
                        <select class="form-control" id="aktif" name="aktif" onkeyup="valueing()">
                            <option value="0"> 0 </option>
                            <option value="1"> 1 </option>
                        </select>
                    </div>
                
                    <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i> Simpan</button>
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-undo"></i> Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>
