<div class="modal fade" id="form" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Guna Pensil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" class="form-horizontal" id="form-edit" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Kode Guna Persil</label>
                        <input type="text" class="form-control" id="kd_gunapersil" name="kd_gunapersil" disabled>
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" onkeyup="valueing()"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Induk</label>
                        <select class="form-control" id="induk" name="induk" onkeyup="valueing()">
                            <option value="1"> 1 - Kelompok I </option>
                            <option value="2"> 2 - Kelompok II </option>
                            <option value="3"> 3 - Kelompok III </option>
                            <option value="4"> 4 - Kelompok IV </option>
                            <option value="5"> 5 - Kelompok V </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kode Tarif</label>
                        <select class="custom-select" id="kode_tarif" name="kode_tarif">
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
