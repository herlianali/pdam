<div class="modal fade" id="form" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Guna Pensil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="form-edit" class="form-horizontal" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kd_gunapersil">Kode Guna Persil</label>
                        <input type="text" class="form-control" id="kd_gunapersil" name="kd_gunapersil" disabled>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" onkeyup="valueing()"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kd_gunapersil_i">Induk</label>
                        <select class="form-control" id="kd_gunapersil_i" name="kd_gunapersil_i">
                            <option value="1"> 1 - Kelompok I </option>
                            <option value="2"> 2 - Kelompok II </option>
                            <option value="3"> 3 - Kelompok III </option>
                            <option value="4"> 4 - Kelompok IV </option>
                            <option value="5"> 5 - Kelompok V </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kd_tarif">Kode Tarif</label>
                        <select class="custom-select" id="kd_tarif" name="kd_tarif">
                            @foreach ($kd_tarif as $kode)
                                <option value="{{ $kode->kd_tarif }}">{{ $kode->kd_tarif }} - {{ $kode->jns_tarif }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i> Simpan</button>
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-undo"></i> Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>
