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
                <form action="" class="form-horizontal" id="form-edit" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group row mt-2 ">
                        <label for="nama" class="col-md-2 col-form-label">Nama</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="nama1" name="nama" onkeyup="valueing()" readonly value="">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
                        <div class="col-md-8">
                            <textarea class="form-control" id="alamat1" name="alamat" readonly value=""></textarea>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="nomor" class="col-md-2 col-form-label">No Telepon</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="telp_1_i" name="telp_1" onkeyup="valueing()">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="nomor" class="col-md-2 col-form-label"></label>
                        <div class="col-md-8">
                            <button class="btn btn-success btn-sm "  type="submit"><i class="far fa-save"></i> Simpan</button>

                        </div>
                    </div>
                 
                </form>
            </div>
        </div>
    </div>
</div>
