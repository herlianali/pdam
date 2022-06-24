@extends('layout.app')
@section('title', 'Jenis Pengaduan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Petugas')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Jenis Pengaduan</li>
    </ol>
@endsection

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
                            <a href="{{ route('printPengaduan') }}" class="btn btn-success btn-sm"><i class="fas fa-print"></i> Cetak</a>
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
                                    @foreach ( $jenisPengaduans as $jenisPengaduan )
                                    <tr>
                                        <td>{{ $jenisPengaduan->kode }}</td>
                                        <td>{{ $jenisPengaduan->keterangan }}</td>
                                        <td>{{ $jenisPengaduan->sifat_pengaduan }}</td>
                                        <td>
                                            @if ($jenisPengaduan->sifat === 'ya')
                                                <span class="badge badge-success"><i class="fas fa-check-circle"></i> Ya</span>
                                            @else
                                                <span class="badge badge-danger"><i class="fas fa-times-circle"></i> Tidak</span>
                                            @endif
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</button>
                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i> Edit</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Tambah Form --}}
    @include('jenisPengaduan.create')
    {{-- Edit Form --}}
    @include('jenisPengaduan.edit')
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

        // $(document).ready(function($) {
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': "{{ csrf_token() }}"
        //         }
        //     });

        //     $('body').on('click', '.edit', function() {
        //         var id = $(this).data('id');

        //
        //     })
        // })
    </script>
@endpush
