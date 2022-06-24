@extends('layout.app')
@section('title', 'Petugas Khusus')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Master</a></li>
    <li class="breadcrumb-item active">Petugas Khusus</li>
</ol>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Petugas Khusus</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="nip">Nip Pegawai</label>
                                <input type="nip" class="form-control" id="nip">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Pegawai</label>
                                <input type="text" class="form-control" id="nama">
                            </div>
                            <div class="form-group">
                                <label for="tugas">Tugas</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="tugas" name="tugas">
                                    <label class="form-check-label">Korektor</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="tugas" name="tugas">
                                    <label class="form-check-label">Pencatat Meter</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jenis_pelanggan">Jenis Pelanggan</label>
                                <select class="custom-select" name="jenis_pelanggan" id="jenis_pelanggan">
                                    <option value="option1">option1</option>
                                    <option value="option2">option2</option>
                                    <option value="option3">option3</option>
                                </select>
                            </div>
                            <button class="btn btn-default btn-sm" type="button" data-toggle="modal" data-target="#pegawai"><i class="fas fa-search fa-fw"></i> Cari Petugas</button>
                            <button type="submit" class="btn btn-success btn-sm"><i class="far fa-save"></i> Simpan</button>
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-undo"></i> Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('petugasKhusus.petugas')
@endsection

@push('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.js') }}"></script>
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
