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
                        <form class="form-horizontal">
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
                                            <option value="{{ $data->nip }}"> {{ $data->userakses }} - {{ $data->nama }} </option>
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
                                        <a href="{{ route('tampillaporanpetugasKorektor') }}" class="btn btn-xs btn-success float-right"> Tampil </a>
                                            <button type="button" class="btn btn-danger btn-sm" id="pantau"><i class=""></i>
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
                                        <br>
                                        <div class="form-group row">
                                        <label for="" class="col-md-3 col-form-label"></label>
                                        <div class="col-md-3">
                                            <a href="{{ route('laporanhonoriumdireksi') }}" class="btn btn-success btn-sm">
                                                Cetak</a>
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

        $(document).on('click', '#tampil', function(e) {
            e.preventDefault();
            var tgl = $('#date').val();
            var thbl = $('#thbl').val();
            var nip = $('#nip').val();
            var pTagih = $('#periode_tagih').val();
            var potensial = $('#potensial').val();
            var pKhusus = $('#pKhusus').val();
            var waktu = $('#waktu').val();
            $.ajax({
                type: "POST",
                dataType: "JSON",
                url: `{{ url('master/laporanpetugasKorektor') }}`,
                data: {
                    _token: '{{ csrf_token() }}',
                    tgl: tgl,
                    thbl: thbl,
                    nip: nip,
                    pTagih: pTagih,
                    potensial: potensial,
                    pKhusus: pKhusus,
                    waktu: waktu,
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(res) {
                    console.log(res);
                    swal.close();
                }
            })
        })
    </script>
@endpush
