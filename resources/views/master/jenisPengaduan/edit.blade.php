@foreach ($jenisPengaduans as $jenisPengaduan)
    <div class="modal fade" id="edit{{ $jenisPengaduan->jns_pengaduan }}" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Table Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('jenisPengaduan.update',$jenisPengaduan->jns_pengaduan) }}" method="POST" id="edit-form">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="jns_pengaduan">Jenis Pengaduan</label>
                            <input type="text" class="form-control" id="jns_pengaduan" name="jns_pengaduan" value="{{ $jenisPengaduan->jns_pengaduan }}">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $jenisPengaduan->keterangan }}">
                        </div>
                        <div class="form-group">
                            <label for="sifat_pengaduan">Sifat Pengaduan</label>
                            <select class="form-control" id="sifat_pengaduan">
                                <option value="T"> T- Teknis</option>
                                <option value="A"> A- Administrasi </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pelayanan">Pelayanan</label>
                            <input type="text" class="form-control" id="pelayanan" name="pelayanan" value="{{ $jenisPengaduan->pelayanan }}">
                        </div>
                        <div class="form-group">
                            <label for="reward">Reward</label>
                            <input type="text" class="form-control" id="reward" name="reward"  value="{{ $jenisPengaduan->reward }}">
                        </div>
                        <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i> Simpan</button>
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-undo"></i> Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
