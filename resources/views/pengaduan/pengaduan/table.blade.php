<div class="col-6">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
            </div>
        </div>
        <div class="card-body">
            {{-- @if ($table === null) --}}
                {{-- <h3 class="text-center">Tidak Ada Data Yang Bisa Ditampilkan Silahkan Melakukan Pencarian</h3> --}}
            {{-- @else --}}
                <table id="table" class="table table-bordered table-responsive-md table-condensed">
                    <thead>
                        <tr>
                            <th>No Pengaduan</th>
                            <th>Status</th>
                            <th>No Pelanggan</th>
                            <th>Jenis Pengaduan</th>
                            <th>Nama Pengadu</th>
                            <th>Alamat Pendau</th>
                            <th>Nama</th>
                            <th>Jalan</th>
                            <th>Gang</th>
                            <th>Nomor</th>
                            <th>No Tamb</th>
                            <th>Tgl Penduanan</th>
                            <th>Uraian</th>
                            <th>Jenis Pengaduan</th>
                            <th>Asal Pengaduan</th>
                            <th>Sifat</th>
                            <th>No BonC</th>
                            <th>Tgl BonC</th>
                            <th>Kelompok BonC</th>
                            <th>Status BonC</th>
                            <th>No BonP</th>
                            <th>Tgl BonP</th>
                            <th>Jenis Pekerjaan</th>
                            <th>Status BonP</th>
                            <th>Kd ptgkontrol</th>
                            <th>Ptg Kontrol</th>
                            <th>Telpon</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    {{-- <tbody id="tableData">
                    </tbody> --}}
                </table>
            {{-- @endif --}}
        </div>
    </div>
</div>
