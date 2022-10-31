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
                <a class="nav-link active" href="{{ route('laporanpetugasKorektor') }}">Laporan</a>
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
                <a class="nav-link" href="{{ route('viewsisapetugasKorektor') }}">View Sisa Random Penugasan</a>
            </li>
        </ul>

        <div class="card">

            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-12">
                        <form class="form-horizontal">
                            <div class="form-group row mt-2">
                                <label for="date" class="col-md-2 col-form-label">Tanggal </label>
                                <div class="col-md-2">
                                    <input type="date" class="form-control" id="date" name="date"
                                        onkeyup="valueing()" value="{{ $date }}">
                                </div>
                                <label for="thbl" class="col-form-label">THBL </label>
                                <div class="col-md-2">
                                    <input type="date" class="form-control" id="thbl" name="thbl"
                                        onkeyup="valueing()">
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="nip" class="col-md-2 col-form-label">NIP </label>
                                <div class="col-md-2">
                                    <select class="form-control" name="nip" id="nip" onkeyup="valueing()">
                                        <option value=""> </option>
                                        <option value=""> </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="periode_tagih" class="col-md-2 col-form-label">Periode Tagih </label>
                                <div class="col-md-2">
                                    <select class="form-control" id="periode_tagih" name="periode_tagih"
                                        onkeyup="valueing()">
                                        <option value=""> </option>
                                        <option value=""> </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="" class="col-md-2 col-form-label"></label>
                                <div class="col-md-10">
                                    <input type="checkbox">
                                    <label for="potensial" class="col-form-label">Potensial</label>
                                    <br>
                                    <input type="checkbox">
                                    <label for="waktu" class=" col-form-label">Waktu</label>
                                    <div class="form-group row">
                                        <label for="" class="col-md-3 col-form-label"></label>
                                        <div class="col-md-3">
                                            <button class="btn btn-success btn-sm" type="submit"><i class=""></i>
                                                Tampil</button>
                                            <button type="submit" class="btn btn-danger btn-sm"><i class=""></i>
                                                Pantau</button>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="laporan_bulanan_per_pertugas"
                                            name="pilih">
                                        <label class="form-check-label">Laporan Bulanan per Petugas Korektor
                                        </label>
                                        <br>
                                        <input type="radio" class="form-check-input" id="laporan_bulanan_semua_petugas"
                                            name="pilih">
                                        <label class="form-check-label">Laporan Bulanan semua Petugas
                                            Korektor</label>
                                        <br>
                                        <input type="radio" class="form-check-input"
                                            id="laporan_honorium_kelebihan_beban_petugas_korektor" name="pilih">
                                        <label class="form-check-label">Laporan Honorium Kelebihan Beban
                                            Petugas Korektor</label>
                                        <br>
                                        <input type="radio" class="form-check-input"
                                            id="laporan_honorium_kelebihan_beban_petugas_korektor_direksi" name="pilih">
                                        <label class="form-check-label">Laporan Honorium Kelebihan Beban Petugas
                                            Korektor(Direksi)</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <table id="example" class="table table-bordered table-responsive-md table-condensed" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>THBL</th>
                                <th>NIP</th>
                                <th>Periode Tagih</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
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
                    let _url = `/master/deleteptgskorektor/${id}`
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
