@extends('layout.app')

@push('css')
    <link href="{{ asset('assets/plugins/font/dot-matrix.css') }}" rel="stylesheet">
    <style>
        .priview {
            font-family: 'Dot Matrix', sans-serif;
        }

        table thead tr {
            border-bottom: 3px dotted rgb(102, 102, 102);
            border-top: 3px dashed rgb(102, 102, 102);
        }
    </style>
@endpush

@section('title', 'BA Mutasi Pelanggan ')

@section('namaHal', 'BA Mutasi Pelanggan')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Mutasi Kolektif</a></li>
        <li class="breadcrumb-item active">Cetak Lampiran</li>
    </ol>
    <br>
    <br>
    <a href="{{ route('cetakLampiran') }}" class="btn btn-sm btn-success float-right print"> Print</a>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print Cetak Lampiran</h3>
                        </div>
                        <div class="card-body priview">
                            <div class="row">
                                <div class="col ">
                                    <div style="font-size:15px">PEMERINTAH KOTA SURABAYA</div>
                                    <div style="font-size:15px">PERUSAHAAN DAERAH AIR MINUM</div>
                                </div>
                                <table>
                                    <tr>
                                        <div class="container" style="margin-left: 10rem">
                                            <div class="row justify-content-between">
                                                <div class="col">
                                                </div>
                                                <div class="col">
                                                </div>
                                                <div class="col">
                                                </div>
                                                <div class="col">
                                                    Hal :
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                    </tr>
                                </table>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Pelanggan</th>
                                            <th>Alamat Pelanggan</th>
                                            <th>Gang</th>
                                            <th>Nomor</th>
                                            <th>Untuk Di</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>10111</td>
                                            <td>Jl Kenangan</td>
                                            <td>1</td>
                                            <td>14</td>
                                            <td>Status</td>
                                            <td>Aktif</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table>
                                    <tr>
                                        <div class="container" style="margin-left: 10rem">
                                            <div class="row justify-content-between">
                                                <div class="col">
                                                </div>
                                                <div class="col">
                                                </div>
                                                <div class="col">
                                                </div>
                                                <div class="col">
                                                    Surabaya, {{ $date }}
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                    </tr>
                                </table>
                                <div class="container">
                                    <div class="row text-center">
                                        <div class="col justify-content-between">
                                            <p>Diketahui Oleh:</p>
                                            <p class="mb-5">Kabag. Langganan Timur</p>
                                            <p class="mb-n3">Nurlilah Satria Pratama, S.T</p>
                                            <hr style="width: 50%">
                                            <p class="mt-n3">1 08 0149</p>
                                        </div>
                                        <div class="col">
                                            <p>Diteliti Oleh:</p>
                                            <p class="mb-5">Kasie Peneliti Pelanggan</p>
                                            <p class="mb-n3">Drs. Ec Agustinus R</p>
                                            <hr style="width: 50%">
                                            <p class="mt-n3"> 130 022 001</p>
                                        </div>
                                        <div class="col">
                                            <p></p>
                                            <p class="mb-2" underline>harus ditanyakan</p>
                                            <p class="mb-5">Yang Membuat</p>
                                            <p class="mb-n3">H Achmad Syamsul Arifin</p>
                                            <hr style="width: 50%">
                                            <p class="mt-n3"> 122 967 332</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
@endsection

@push('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">

        var loadingPrint = function() {
            swal.fire({
                title: "Mohon Tunggu !",
                html: "Sedang Menyiapkan Data...",
                allowOutsideClick: false,
                showConfirmButton: false,
                willOpen: () => {
                    swal.showLoading()
                },
            })
        }

        $(document).on('click', '.print', function(e) {
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: `{{ url('mutasiKolektif/previewLampiran') }}`,
                dataType: 'html',
                data: {
                    _token: '{{ csrf_token() }}',
                },
                beforeSend: function() {
                    loadingPrint()
                },
                success: function(res){
                    var w = window.open(`{{ url('mutasiKolektif/previewLampiran') }}`,'_blank');
                    w.document.open();
                    w.document.write(res);
                    w.document.close();
                    w.window.print();
                    w.window.close();
                    swal.close();
                }
            })
        })
    </script>
@endpush
