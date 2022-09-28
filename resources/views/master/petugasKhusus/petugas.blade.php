<div class="modal fade" id="pegawai" tabindex="-1" aria-labelledby="pegawaiLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Table Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="example1"
                    class="table table-bordered table-hover table table-bordered table-responsive-md table-condensed"
                    style="width: 100%">
                    <thead>
                        <tr>
                            <th>Nip</th>
                            <th>Nama Lengkap</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($c_pegawai as $cari)
                            <tr>
                                <td>{{ $cari->nip }}</td>
                                <td>{{ $cari->nama }}</td>
                                <td>
                                    {{-- <input type="hidden" name="nip" value="{{ $cari->nip }}">
                                    <input type="hidden" name="nama" value="{{ $cari->nama }}"> --}}
                                    <button type="button" class="btn btn-success btn-sm pilih">
                                        <i class="far fa-check-circle"></i>
                                        Pilih
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
