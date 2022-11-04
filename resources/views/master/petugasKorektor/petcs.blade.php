<div class="modal fade" id="cs" tabindex="-1" aria-labelledby="pegawaiLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cari Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="example1" class="table table-bordered table-responsive-md table-condensed" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Nip</th>
                            <th>Nama Lengkap</th>
                            <th>Jns Pegawai</th>
                            <th>kddk Pegawai</th>
                            <th>Status Pegawai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cS as $cari)
                            <tr>
                                <td>{{ $cari->nip}}</td>
                                <td>{{ $cari->nama }}</td>
                                <td style="text-align:center">{{ $cari->nip }}</td>
                                <td style="text-align:center">
                                    @if ($cari->kddk_pegawai  == '01')
                                        <span class="badge bg-success"><i class="far fa-check-circle"></i> Ya</span>
                                    @else
                                        <span class="badge bg-danger"><i class="far fa-times-circle"></i> Tidak</span>
                                    @endif
                                </td>
                                <td style="text-align:center">{{ $cari->nip }}</td>
                                <td><button class="btn btn-success btn-sm" id="pilih" data-id="{{ $cari->nip }}">Pilih</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <p class="mr-auto">Klik tombol pilih untuk memasukkan data ke table</p>
                <button type="button" class="btn btn-danger float-right btn-sm" data-dismiss="modal"><i class="far fa-times-circle"></i> Close</button>
            </div>
        </div>
    </div>
</div>
