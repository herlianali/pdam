@extends('layout.app')
@section('title', 'Jenis Pengaduan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Petugas')
@section('menuName', 'Master')
@section('subMenuName', 'Jenis Pengaduan')

@section('content')

    <section class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Jenis Pengaduan</h3>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus-circle"></i> Buat</button>
                            <a href="" class="btn btn-success btn-sm"><i class="fas fa-print"></i> Cetak</a>
                            <table id="table" class="table table-bordered table-responsive-md table-condensed" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Jenis Keterangan</th>
                                        <th>Sifat Pengaduan</th>
                                        <th>Reward</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>FS</td>
                                        <td>Pengecekan Ada Tidaknya Strainer</td>
                                        <td>T</td>
                                        <td>
                                            <span class="badge badge-success"><i class="fas fa-check-circle"></i> Ya</span>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</button>
                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i> Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>GS</td>
                                        <td>Ganti Strainer</td>
                                        <td>T</td>
                                        <td>
                                            <span class="badge badge-danger"><i class="fas fa-times-circle"></i> Tidak</span>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</button>
                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i> Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PD</td>
                                        <td>Pasang Meter(prodis)</td>
                                        <td>T</td>
                                        <td>
                                            <span class="badge badge-success"><i class="fas fa-check-circle"></i> Ya</span>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</button>
                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i> Edit</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Tambah Form --}}
    <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Table Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label for="kode">Jenis Pengaduan</label>
                            <input type="text" class="form-control" id="kode" name="kode">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan">
                        </div>
                        <div class="form-group">
                            <label for="sifat_pengaduan">Sifat Pengaduan</label>
                            <input type="text" class="form-control" id="sifat_pengaduan" name="sifat_pengaduan">
                        </div>
                        <div class="form-group">
                            <label for="reward">Reward</label>
                            <input type="text" class="form-control" id="reward" name="reward">
                        </div>
                        <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i> Simpan</button>
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-undo"></i> Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Edit Form --}}
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Table Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label for="kode">Jenis Pengaduan</label>
                            <input type="text" class="form-control" id="kode" name="kode">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan">
                        </div>
                        <div class="form-group">
                            <label for="sifat_pengaduan">Sifat Pengaduan</label>
                            <input type="text" class="form-control" id="sifat_pengaduan" name="sifat_pengaduan">
                        </div>
                        <div class="form-group">
                            <label for="reward">Reward</label>
                            <input type="text" class="form-control" id="reward" name="reward">
                        </div>
                        <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i> Simpan</button>
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-undo"></i> Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script>
        $(function () {
            $('#table').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
