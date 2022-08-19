@extends('layout.app')
@section('title', 'Jenis Panggilan Dinas')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Master</a></li>
    <li class="breadcrumb-item active">Jenis Panggilan Dinas</li>
</ol>
@endsection

@section('content')
<section class="content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Jenis Panggilan Dinas</h3>

              </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus-circle"></i> Buat</button>
                            <a href="{{ route('JenisPengaduan') }}" class="btn btn-success btn-sm"><i class="fas fa-print"></i> Cetak</a>
                            <table id="table" class="table table-bordered table-responsive-md table-condensed" style="width: 100%">
                                <thead>
                                    <tr>
                        <th>No </th>
                        <th>Jenis PDINAS</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td>01</td>
                        <td>Tanpa Meter Air</td>
                        <td>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="deletePanggilanDinas()"><i class="fas fa-trash-alt"></i> Hapus</button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>02</td>
                        <td>Pompa Langsung</td>
                        <td>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="deletePanggilanDinas()"><i class="fas fa-trash-alt"></i> Hapus</button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>03</td>
                        <td>Segel Meter Air Putus</td>
                        <td>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="deletePanggilanDinas()"><i class="fas fa-trash-alt"></i> Hapus</button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>04</td>
                        <td>Segel Kopling Putus</td>
                        <td>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="deletePanggilanDinas()"><i class="fas fa-trash-alt"></i> Hapus</button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>05</td>
                        <td>Meter Air Hilang</td>
                        <td>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="deletePanggilanDinas()"><i class="fas fa-trash-alt"></i> Hapus</button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>06</td>
                        <td>Tutup Dinas Air Digunakan</td>
                        <td>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="deletePanggilanDinas()"><i class="fas fa-trash-alt"></i> Hapus</button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        {{-- Tambah Form --}}
    @include('master.panggilanDinas.create')
    {{-- Edit Form --}}
    @include('master.panggilanDinas.edit')
    {{-- Print Form --}}
    @include('master.panggilanDinas.print')

    </div>
</div>
</section>
@endsection

@push('js')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script>
        $(function () {
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "pageLength": 5
            });
        });

        function valueing() {
            if(document.getElementById('kode').value==="" || document.getElementById('keterangan').value==="") {
                document.getElementById('batal').disabled = true
                document.getElementById('simpan').disabled = true
            }else{
                document.getElementById('batal').disabled = false
                document.getElementById('simpan').disabled = false
            }
        }
    </script>
@endpush
