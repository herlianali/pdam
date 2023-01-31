@extends('layout.app')

@push('css')
    <link href="{{ asset('assets/plugins/font/dot-matrix.css') }}" rel="stylesheet">
    <style>
        .priview {
            font-family: 'Dot Matrix', sans-serif;
        }

        table thead tr {
            border-bottom: 3px dotted rgb(102, 102, 102);
            border-top: 3px dotted rgb(102, 102, 102);
        }
    </style>
@endpush

@section('title', 'BA Mutasi Pelanggan')

@section('namaHal', 'BA Mutasi Pelanggan')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Monitoring BA Mutasi Perorangan</a></li>
        <li class="breadcrumb-item active">Print Preview</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class=" col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Monitoring BA Mutasi Pelanggan</h3>
                            <button class="btn btn-sm btn-success float-right print"> Print</button>
                        </div>
                        <div class="card-body priview">
                            <div class="row">
                                <div class="col">
                                    <div style="font-size:15px">PEMERINTAH KOTA SURABAYA</div>
                                    <div style="font-size:15px">PERUSAHAAN DAERAH AIR MINUM</div>
                                    <div style="font-size:13px">Jl.Mayjen Prof. Dr. Moestopo 2 </div>
                                    <div style="font-size:13px">Tlp.(031)5039373, 5039392, 5039676</div>
                                    <div style="font-size:13px">(10 Lines) Fax. 5320100</div>
                                    <div style="font-size:13px">SURABAYA</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col">
                                    <p>Tanggal Cetak : {{ $date }}</p>
                                </div>
                            </div>
                            <h5>
                                <center>DAFTAR MUTASI PELANGGAN</center>
                            </h5>
                            <br>
                            <div class="container">
                            <table class="table table-border">
                                <thead>
                                    <tr>
                                        <th>NO BAMU</th>
                                        <th>TGL BA MU</th>
                                        <th>JENIS MU</th>
                                        <th>NO PELAN</th>
                                        <th>NAMA L</th>
                                        <th>NAMA B</th>
                                        <th>ALAMAT L</th>
                                        <th>ALAMAT B</th>
                                        <th>TRF L</th>
                                        <th>TRF B</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if (count($data) > 0)
                                    @foreach ($data as $row)
                                    <tr>
                                        <td>{{ $row->no_bamutasi }}</td>
                                        <td>{{ $row->tgl_bamutasi }}</td>
                                        <td>{{ $row->jns_mutasi }}</td>
                                        <td>{{ $row->no_plg }}</td>
                                        <td>{{ $row->nm_l }}</td>
                                        <td>{{ $row->nm_b }}</td>
                                        <td>{{ $row->jalan_l }} {{ $row->gang_l }} {{ $row->nomor_l }} {{ $row->notamb_l }}</td>
                                        <td>{{ $row->jalan_b }} {{ $row->gang_b }} {{ $row->nomor_b }} {{ $row->notamb_b }}</td>
                                        <td>{{ $row->kd_tarif_l }}</td>
                                        <td>{{ $row->kd_tarif_b }}</td>
                                    </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
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
                type: "POST",
                url: `{{ url('mutasipelanggan/BAMutasiPerorangan') }}`,
                dataType: 'html',
                data: {
                    _token: '{{ csrf_token() }}',
                    no_bamutasi: "{{ $formData['no_bamutasi'] }}"
                },
                beforeSend: function() {
                    loadingPrint()
                },
                success: function(res){
                    var w = window.open(`{{ url('mutasipelanggan/BAMutasiPerorangan') }}`,'_blank');
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
