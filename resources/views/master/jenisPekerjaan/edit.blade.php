<div class="modal fade" id="form" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Jenis Pekerjaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" class="form-horizontal" id="form-edit" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="jns_pekerjaan">Jenis Pekerjaan</label>
                        <input type="text" class="form-control" id="jns_pekerjaan" name="jns-pekerjaan" value="">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" value="Tutupan Sementara"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="jns_bonp">Jenis BON P</label>
                        <select class="form-control" id="jenis_bonp" name="jenis_bonp">
                            @foreach ($jnsBonp as $jb)
                                <option value="{{ $jb->kode }}">{{ $jb->kode }} - {{ $jb->keterangan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="beban">Beban</label>
                        <div class="ml-3 row">
                            <div class="col-md-1">
                                <input type="radio" ng-model="selected" class="form-check-input beban_plg" id="Ya" name="beban_plg" value="1">
                                <label class="form-check-label">Ya</label>
                            </div>
                            <div class="col-md-6">
                                <input type="radio" ng-model="selected" class="form-check-input beban_plg" id="Tidak" name="beban_plg" value="0">
                                <label class="form-check-label">Tidak</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kel_bonp">Kel BON P</label>
                        <select class="form-control" id="kel_bonp" name="kel_bonp">
                            <option value="T">T - TDA </option>
                            <option value="K">K - Kebocoran </option>
                            <option value="M">M - Meter </option>
                            <option value="S">S - Segel </option>
                            <option value="A">A - Air Kotor </option>
                            <option value="R">R - Stop Kran </option>
                            <option value="L">L - Lain-Lain </option>
                            <option value="B">B - Bukaan </option>
                        </select>
                    </div>
                    <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i> Simpan</button>
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-undo"></i> Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>
