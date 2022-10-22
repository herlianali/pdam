@extends('layout.app')
@section('title', 'Pengaduan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Pengaduan')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Pengaduan</a></li>
        <li class="breadcrumb-item active">Pengaduan</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pengaduan</h3>
                            <a href="" class="btn btn-xs btn-warning float-right"><i
                                    class="fas fa-plus"></i> Tambah Pengaduan</a>
                        </div>
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="col-md-1"></div>
                                <div class="col-md-12">
                                    <form class="form-horizontal">
                                        <div class="form-group row mt ">
                                            <label for="ptgs_cs" class="col-md-2 col-form-label"> Petugas CS </label>
                                            <div class="col-md-5">
                                                <select class="form-control" id="ptgs_cs" name="ptgs_cs"
                                                    onkeyup="valueing()">
                                                    <option value=""> </option>
                                                    <option value=""> </option>
                                                </select>
                                            </div>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#pelanggan"><i class="fas fa-search"></i> Cari
                                                Pelanggan</button>
                                            &nbsp;
                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                                data-target="#form"><i class="fas fa-search"></i> Cari Pengaduan</button>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jns_pengadu" class="col-md-2 col-form-label"> Jenis Pengadu </label>
                                            <div class="col-md-5">
                                                <select class="form-control" id="jns_pengadu" name="jns_pengadu"
                                                    onkeyup="valueing()">
                                                    <option value=""> </option>
                                                    <option value=""> </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="no_pelanggan" class="col-md-2 col-form-label">No Pelanggan</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id="no_pelanggan"
                                                    name="no_pelanggan" onkeyup="valueing()">
                                            </div>
                                            <label for="nopel_zamp" class="col-form-label">Nopel Zamp</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id="nopel_zamp" name="nopel_zamp"
                                                    onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="nama" class="col-md-2 col-form-label">Nama</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" id="nama" name="nama"
                                                    onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="jln"
                                                    placeholder="Jalan" onkeyup="valueing()">
                                            </div>
                                            <label for="gang" class="col-form-label">Gang</label>
                                            <div class="col-md-1">
                                                <input type="text" class="form-control" id="gang" name="gang"
                                                    onkeyup="valueing()">
                                            </div>
                                            <label for="no" class="col-form-label">No</label>
                                            <div class="col-md-1">
                                                <input type="text" class="form-control" id="nomor" name="nomor"
                                                    onkeyup="valueing()">
                                            </div>
                                            <label for="no_tambahan" class="col-form-label">No Tambahan</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="no_tambahan"
                                                    name="no_tambahan" onkeyup="valueing()">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <table id="table" class="table table-bordered table-responsive-md table-condensed">
                                <thead>
                                    <tr>
                                        <th>No_Pengadu</th>
                                        <th>Status</th>
                                        <th>No_Pelanggan</th>
                                        <th>Jns_Pengadu</th>
                                        <th>Nama Pengadu</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Tanpa Meter Air</td>
                                        <td>01</td>
                                        <td>Tanpa Meter Air</td>
                                        <td>01</td>
                                        <td>
                                            <button type="submit" class="btn btn-danger btn-xs" onclick=""><i
                                                    class="fas fa-trash-alt"></i> Hapus</button>
                                            <a href="" class="btn btn-xs btn-success"><i
                                                    class="fas fa-eye"></i> Info</a>
                                            <a href="" class="btn btn-xs btn-warning"><i
                                                    class="fas fa-edit"></i> Edit</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @include('pengaduan.pengaduan.pelanggan')
                    </div>
                </div>
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
        $(function() {
            $('#table').DataTable({
                // "lengthChange": false,
                //  "autoWidth": false,
                //   "responsive": true,
                "oLanguage": {
                    "sSearch": "No Pelanggan : "
                },
                //  "pageLength": 3
            }).buttons().container().appendTo('#table_wrapper .col-md-1:eq(0)');
            $('#table1').DataTable({
                "paging": true,
                //  "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                //  "autoWidth": false,
                // "responsive": true,
                // "pageLength": 3

            });
        });

        function deletePengaduan(id) {
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
            }).then(function(e) {
                if (e.value === true) {
                    let token = "{{ csrf_token() }}"
                    let _url = `/panggilanDinas/${id}`
                    console.log(_url)

                    $.ajax({
                        type: 'DELETE',
                        url: _url,
                        data: {
                            _token: token
                        },
                        success: function(resp) {
                            if (resp.success) {
                                swal.fire("Selesai!", resp.message, "Berhasil");
                                location.reload();
                            } else {
                                swal.fire("Gagal!", "Terjadi Kesalahan.", "error");
                            }
                        },
                        error: function(resp) {
                            swal.fire("Gagal!", "Terjadi Kesalahan.", "error")
                        }
                    })
                } else {
                    e.dismiss;
                }
            }, function(dismiss) {
                return false;
            });
        }
    </script>
@endpush
