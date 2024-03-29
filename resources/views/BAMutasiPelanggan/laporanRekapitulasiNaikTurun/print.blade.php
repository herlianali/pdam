@extends('layout.app')

@push('css')
    <link href="{{ asset('assets/plugins/font/dot-matrix.css') }}" rel="stylesheet">
    <style>
        .priview {
            font-family: 'Dot Matrix', sans-serif;
        }
    </style>
@endpush

@section('title', 'Laporan Rekapitulasi Naik Turun')

@section('namaHal', 'BA Mutasi Pelanggan')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
        <li class="breadcrumb-item active">Laporan Rekapitulasi Naik Turun</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Laporan Rekapitulasi Naik Turun</h3>
                            <button class="btn btn-sm btn-success float-right print"> Print</button>
                        </div>
                        <div class="card-body priview">
                        <div class="row">
                            <div class="col" style="text-align: left;">
                                <div style="font-size:15px">PDAM Kota Surabaya</div>
                                <div style="font-size:15px">Rekapitulasi Perubahan Tarif 
                                @if($formData['level'] == 'N')
                                    Naik
                                @else
                                    Turun
                                @endif
                                Wilayah Timur</div><br>
                                <div style="font-size:15px">Periode : {{ $periode }}</div>
                            </div>
                        </div>
                        <form class="form-horizontal">
                            <br>
                            <table class="table table-bordered table-responsive-md table-condensed">
                                <thead>
                                    <tr>
                                        <th width="20%">No</th>
                                        <th width="20%">Kode Tarif L </th>
                                        <th width="20%">Kode Tarif B</th>
                                        <th width="30%">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($data) > 0)
                                    <div style="display: none">{{ $total = 0 }}</div>
                                        @foreach ($data as $row)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $row->kd_tarif_l }}</td>
                                            <td>{{ $row->kd_tarif_b }}</td>
                                            <td>{{ $row->jumlah }}</td>
                                            <div style="display: none">{{$total += $row->jumlah }}</div>
                                        </tr>
                                        @endforeach
                                    @endif
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>Total</th>
                                        <th>{{ $total }}</th>
                                    </tr>
                                </tbody>
                            </table><br>
                            <div class="row text-center">
                                <div class="col justify-content-between">
                                    <p>MENGETAHUI</p>
                                    <p class="mb-5">Ms Pemakaian Air</p><br>
                                    <p>Ari Bimo Sakti S.Kom</p>
                                    <hr style="width: 50%">
                                    <p>1.05.01322</p>
                                </div>
                                <div class="col">
                                    <p>DITELITI OLEH :</p>
                                    <p class="mb-5">Manager Data Kepelanggan</p><br>
                                    <p>Nurlillah Satria P.</p>
                                    <hr style="width: 50%">
                                    <p>1.08.01499</p>
                                </div>
                                <div class="col">
                                    <p>DIBUAT OLEH :</p>
                                    <p class="mb-5">SPV. Data Kepelanggan</p><br>
                                    <p>Oliv Oktavera. S.E</p>
                                    <hr style="width: 50%">
                                    <p>1.05.01307</p>
                                </div>
                            </div>
                        </div>
                        </form>
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
                url: `{{ url('mutasipelanggan/cetakRekapitulasiNaikTurun') }}`,
                dataType: 'html',
                data: {
                    _token: '{{ csrf_token() }}',
                    periode: "{{ $formData['periode'] }}",
                    periode1: "{{ $formData['periode1'] }}",
                    dasar: "{{ $formData['dasar'] }}",
                    level: "{{ $formData['level'] }}"
                },
                beforeSend: function() {
                    loadingPrint()
                },
                success: function(res){
                    var w = window.open(`{{ url('mutasipelanggan/cetakRekapitulasiNaikTurun') }}`,'_blank');
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
