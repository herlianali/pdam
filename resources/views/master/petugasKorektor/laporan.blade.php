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
                <a class="nav-link" href="{{ route('petugasKorektor.index') }}">Master Petugas</a>
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
                        <form class="form-horizontal" action="{{ route('showLaporan') }}" method="POST">
                            @csrf
                            <div class="form-group row mt-2">
                                <label for="date" class="col-md-2 col-form-label">Tanggal </label>
                                <div class="col-md-2">
                                    <input type="date" class="form-control" id="date" name="date"
                                     value="{{ $date }}">
                                </div>
                                <label for="thbl" class="col-form-label">THBL </label>
                                <div class="col-md-2">
                                    <input type="month" class="form-control" id="thbl" name="thbl">
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="nip" class="col-md-2 col-form-label">NIP </label>
                                <div class="col-md-2">
                                    <select class="form-control" name="nip" id="nip">
                                        <option value=""> </option>
                                        @foreach ($nip as $data)
                                            <option value="{{ $data->userakses }}|{{ $data->nama }}"> {{ $data->userakses }} - {{ $data->nama }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="periode_tagih" class="col-md-2 col-form-label">Periode Tagih </label>
                                <div class="col-md-2">
                                    <select class="form-control" id="periode_tagih" name="periode_tagih">
                                        <option value=""></option>
                                        <option value="1"> 1 </option>
                                        <option value="2"> 2 </option>
                                        <option value="All"> All </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="" class="col-md-2 col-form-label"></label>
                                <div class="col-md-10">
                                    <input type="checkbox" name="potensial" id="potensial">
                                    <label for="potensial" class="col-form-label">Potensial</label>
                                    <input type="checkbox" name="pKhusus" id="pKhusus">
                                    <label for="pKhusus" class="col-form-label" id="lpKhusus">Potensial Khusus</label>
                                    <br>
                                    <input type="checkbox" name="waktu" id="waktu">
                                    <label for="waktu" class=" col-form-label">Waktu</label>
                                    <div class="form-group row">
                                        <label for="" class="col-md-3 col-form-label"></label>
                                        <div class="col-md-3">
                                            <button class="btn btn-sm btn-success" id="tampil" name="submit" value="tampil"> Tampil </button>
                                            <button class="btn btn-danger btn-sm" id="pantau" disabled> Pantau</button>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="lb_per_pertugas" name="pilih" value="lb_per_pertugas">
                                        <label class="form-check-label">Laporan Bulanan per Petugas Korektor
                                        </label>
                                        <br>
                                        <input type="radio" class="form-check-input" id="lb_semua_petugas" name="pilih" value="lb_semua_petugas">
                                        <label class="form-check-label">Laporan Bulanan semua Petugas
                                            Korektor</label>
                                        <br>
                                        <input type="radio" class="form-check-input" id="nonDireksi" name="pilih" value="nonDireksi">
                                        <label class="form-check-label">Laporan Honorium Kelebihan Beban
                                            Petugas Korektor</label>
                                        <br>
                                        <input type="radio" class="form-check-input" id="direksi" name="pilih" value="direksi">
                                        <label class="form-check-label">Laporan Honorium Kelebihan Beban Petugas
                                            Korektor(Direksi)</label>
                                        <br>
                                        <div class="form-group row">
                                            <label for="" class="col-md-3 col-form-label"></label>
                                            <div class="col-md-3">
                                                <button class="btn btn-success btn-sm" id="cetak" name="submit" value="cetak"> Cetak </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
        $(document).ready(function() {
            $('#example').DataTable({
                "oLanguage": {
                    "sSearch": "Cari Data : "
                },
                "pageLength": 5
            }).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');

            $('#pKhusus').hide()
            $('#lpKhusus').hide()
            $('#table-section').hide()
        })

        var showLoading = function() {
            swal.fire({
                title: "Mohon Tunggu !",
                html: "Sedang Memproses...",
                allowOutsideClick: false,
                showConfirmButton: false,
                willOpen: () => {
                    swal.showLoading()
                },
            })
        }

        $(document).on('click', '#potensial', function() {
            if (!$(this).is(':checked')) {
                $('#pKhusus').hide()
                $('#lpKhusus').hide()
            }else{
                $('#pKhusus').show()
                $('#lpKhusus').show()
            }
        })

    </script>
@endpush
