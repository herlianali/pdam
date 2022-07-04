@extends('layout.app')
{{-- @include('jenisPelanggan.create') --}}

@section('title', 'Jenis Pelanggan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Pelanggan')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Master</a></li>
    <li class="breadcrumb-item active">Jenis Pelanggan</li>
</ol>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Jenis Pelanggan</h3>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-md-9">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="jenis_pelanggan" class="col-md-2 col-form-label">Jenis Pelanggan</label>
                                        <div class="col-md-8">
                                            <input type="jenis_pelanggan" class="form-control" id="jenis_pelanggan" onkeyup="valueing()">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="keterangan" class="col-md-2 col-form-label">Keterangan</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="keterangan" onkeyup="valueing()">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-sm" id="baru"><i class="fas fa-print"></i> Cetak</button>
                                    <button type="submit" class="btn btn-success btn-sm" id="simpan" disabled><i class="far fa-save"></i> Simpan</button>
                                    <button type="submit" class="btn btn-danger btn-sm" id="batal" disabled><i class="far fa-times-circle"></i> Batal</button>
                                </form>
                            </div>
                            <div class="col-md-2">
                                <img src="{{ asset('assets/img/logo.png') }}" class="mx-auto d-block" alt="" style="width: 90%">
                            </div>
                        </div>
                        <table id="table" class="table table-bordered table-responsive-md table-condensed" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Pelanggan</th>
                                    <th>Keterangan</th>
                                    <th>JNS_REKSWASTA</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jenisPelanggans as $jenisPelanggan )
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $jenisPelanggan->jenis_pelanggan }}</td>
                                    <td>{{ $jenisPelanggan->keterangan }}</td>
                                    <td>S</td>
                                    <td>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="deleteJenisPelanggan({{ $jenisPelanggan->id }})"><i class="fas fa-trash-alt"></i> Hapus</button>
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
@include('master.jenisPelanggan.form')
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

        // function editJenisPelanggan (event) {

        // }

        function deleteJenisPelanggan (id) {
            swal.fire({
                title: "Hapus Data?",
                icon: 'question',
                text: "Apakah Anda Yakin Ingin Menghapus",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#e74c3c",
                confirmButtonText: "Iya",
                cancelButtonText: "Tidak",
                reverseButtons: !0
            }).then(function (e) {
                if (e.value === true) {
                    let token = "{{ csrf_token() }}"
                    let _url = `/jenisPelanggan/${id}`
                    console.log(_url)

                    $.ajax({
                        type: 'DELETE',
                        url: _url,
                        data: {_token: token},
                        success: function (resp) {
                            if (resp.success) {
                                swal.fire("Selesai!", resp.message, "Berhasil");
                                location.reload();
                            }else{
                                swal.fire("Gagal!", "Terjadi Kesalahan.", "error");
                            }
                        },
                        error: function(resp) {
                            swal.fire("Gagal!", "Terjadi Kesalahan.", "error" )
                        }
                    })
                }else{
                    e.dismiss;
                }
            }, function(dismiss) {
                return false;
            });
        }
    </script>
@endpush
