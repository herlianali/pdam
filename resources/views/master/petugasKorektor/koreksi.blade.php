@extends('layout.app')
@section('title', 'Petugas Korektor')


@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('petugasKorektor') }}">Master Petugas</a></li>
        <li class="breadcrumb-item"><a href="{{ route('laporanpetugasKorektor') }}">Laporan</a></li>
        <li class="breadcrumb-item"><a href="{{ route('randompetugasKorektor') }}">Random Penugasan</a></li>
        <li class="breadcrumb-item"><a href="{{ route('viewsisapetugasKorektor') }}">View Sisa Random Penugasan</a></li>
        <li class="breadcrumb-item"><a href="{{ route('viewptspetugasKorektor') }}">View Penugasan</a></li>
        <li class="breadcrumb-item"><a href="{{ route('monitoringpetugasKorektor') }}">Monitoring Petugas</a></li>
        <li class="breadcrumb-item active">Koreksi Penugasan</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Petugas Korektor</h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <form class="form-horizontal">
                                        <div class="form-group row mt-2">
                                            <label for="nip" class="col-md-2 col-form-label">NIP </label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id="nip" name="nip" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="nama" class="col-md-2 col-form-label">Nama </label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id="nama" name="nama"onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="periode" class="col-md-2 col-form-label">Periode </label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id="periode" name="periode" onkeyup="valueing()">
                                            </div>
                                            <label for="tgl_penugasan" class="col-md-2 col-form-label">Tanggal Penugasan
                                            </label>
                                            <div class="col-md-3">
                                                <input type="date" class="form-control" id="tgl_penugasan" name="tgl_penugasan"onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="" class="col-md-2 col-form-label"></label>
                                            <div class="col-md-7">
                                                <input type="checkbox">
                                                <label for="potensial" class="col-md-2 col-form-label">Potensial</label>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="" class="col-md-6 col-form-label"></label>
                                            <div class="col-md-6">
                                                <button class="btn btn-success btn-sm float-right"
                                                    type="submit">Tampil</button>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <table id="table" class="table table-bordered table-responsive-md table-condensed">
                                    <thead>
                                        <tr>
                                            <th width="20%">NIP</th>
                                            <th width="20%">Nama </th>
                                            <th width="10%">Recid</th>
                                            <th width="20%">Zona</th>
                                            <th width="20%">Bundel</th>
                                            <th width=10%>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>
                                            <button type="submit" class="btn btn-xs btn-danger "><i
                                                    class="fas fa-trash-alt"></i> Hapus</button>
                                            <button type="button" class="btn btn-xs btn-success " data-toggle="modal"
                                                data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                                        </td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
    </section>
@endsection

@push('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script>
        $(function() {
            $('#example').DataTable({

                //  "lengthChange": false,
                //   "autoWidth": false,
                //   "responsive": true,
                "oLanguage": {
                    "sSearch": "Kode Retribusi : "
                },
                "pageLength": 5
            }).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
            $('#example1').DataTable({
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

        function deleteRetribusi(id) {
            console.log(id)
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
                    let _url = `/master/deleteRetribusi/${id}`
                    console.log(_url)

                    $.ajax({
                        type: 'DELETE',
                        url: _url,
                        data: {
                            _token: token
                        },
                        success: function(resp) {
                            if (resp.success) {
                                swal.fire("Selesai!", resp.message, "success");
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

        function valueing() {
            if (document.getElementById('rp_retribusi').value === "") {
                document.getElementById('batal').disabled = true
                document.getElementById('simpan').disabled = true
            } else {
                document.getElementById('batal').disabled = false
                document.getElementById('simpan').disabled = false
            }
        }
    </script>
@endpush
