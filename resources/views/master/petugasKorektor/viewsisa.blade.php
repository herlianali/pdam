@extends('layout.app')
@section('title', 'Petugas Korektor')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')

@endsection

@section('content')
    <section class="content">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('petugasKorektor') }}">Master Petugas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('laporanpetugasKorektor') }}">Laporan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('randompetugasKorektor') }}">Random Penugasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('viewptspetugasKorektor') }}">View Penugasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('monitoringpetugasKorektor') }}">Monitoring Petugas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('koreksipetugasKorektor') }}">Koreksi Penugasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('viewsisapetugasKorektor') }}">View Sisa Random Penugasan</a>
            </li>
        </ul>
        <div class="card">

            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-12">
                        <form class="form-horizontal">
                            <div class="form-group row mt-2">
                                <label for="thbl" class="col-md-2 col-form-label">THBL </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="thbl" name="thbl"
                                        onkeyup="valueing()">
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="date" class="col-md-2 col-form-label">Tanggal Penugasan
                                </label>
                                <div class="col-md-4">
                                    <input type="date" class="form-control" id="date" name="date"
                                        onkeyup="valueing()" value="{{ $date }}">
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="potensial" class="col-md-2 col-form-label"></label>
                                <div class="col-md-7">
                                    <input type="checkbox">
                                    <label for="potensial" class="col-md-2 col-form-label">Potensial</label>
                                </div>
                            </div>
                            <div class="form-group row mt-2 ">
                                <label for="" class="col-md-6 col-form-label"></label>
                                <div class="col-md-5">
                                    <button class="btn btn-success btn-sm" type="submit"><i class=""></i>
                                        Tampil</button>
                                    <button type="submit" class="btn btn-danger btn-sm"><i class=""></i>
                                        Pantau</button>
                                </div>
                            </div>
                        </form>
                        <table id="table" class="table table-bordered table-responsive-md table-condensed">
                            <thead>
                                <tr>
                                    <th width="20%">Zona</th>
                                    <th width="20%">No Bundel </th>
                                    <th width="20%">Jumlah Pelanggan</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <p>Jumlah Data = </p>
                        <form>
                            <div class="form-group row mt-2 ">
                                <label for="ptgs_korektor" class="col-md-2 col-form-label">Petugas Korektor</label>
                                <div class="col-md-4">
                                    <select class="form-control" id="ptgs_korektor" name="ptgs_korektor"
                                        onkeyup="valueing()">

                                        <option value=""> </option>
                                        <option value=""> </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="" class="col-md-2 col-form-label"> </label>
                                <div class="col-md-12">
                                    <input type="checkbox">
                                    <label for="nomor" class="col-md-2 col-form-label">Hapus Petugas</label>
                                    <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i> Hapus
                                        Petugas</button>
                                    <br>
                                    <input type="checkbox">
                                    <label for="" class="col-md-2 col-form-label">Kirim Petugas</label>
                                    <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i> Kirim
                                        Petugas</button>
                                </div>
                            </div>
                        </form>
                        <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i>
                            Simpan</button>
                    </div>
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
