@extends('layout.app')
@section('title', 'Petugas Kontrol')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Master</a></li>
    <li class="breadcrumb-item active">Petugas Kontrol</li>
</ol>
@endsection

@section('content')
<section class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Petugas Kontrol</h3>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-info btn-sm mb-2" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus-circle"></i> Tambah Petugas Kontrol</button>
                        <button class="btn btn-default btn-sm mb-2" type="button" data-toggle="modal" data-target="#pegawai"><i class="fas fa-search fa-fw"></i> Cari Pegawai</button>
                        <table id="table" class="table table-bordered table-responsive-md table-condensed" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Petugas</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>TK01</td>
                                    <td>17900203</td>
                                    <td>Djodi Sujanto</td>
                                    <td>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="deleteJenisPelanggan()"><i class="fas fa-trash-alt"></i> Hapus</button>
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i> Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>TK02</td>
                                    <td>18200417</td>
                                    <td>Machmudi</td>
                                    <td>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="deleteJenisPelanggan()"><i class="fas fa-trash-alt"></i> Hapus</button>
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i> Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>TK03</td>
                                    <td>510037084</td>
                                    <td>Gatot Sutrisno</td>
                                    <td>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="deleteJenisPelanggan()"><i class="fas fa-trash-alt"></i> Hapus</button>
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
@include('petugasKontrol.create')
@include('petugasKontrol.edit')
@include('petugasKontrol.petugas')
@endsection

@push('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
