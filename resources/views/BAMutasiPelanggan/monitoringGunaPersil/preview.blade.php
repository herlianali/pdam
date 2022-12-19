@extends('layout.app')

@push('css')
    <link href="{{ asset('assets/plugins/font/dot-matrix.css') }}" rel="stylesheet">
    <style>
        .priview {
            font-family: 'Dot Matrix', sans-serif;
        }
    </style>
@endpush

@section('title', 'Print Monitoring Guna Persil')

@section('namaHal', 'BA Mutasi Pelanggan')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
        <li class="breadcrumb-item">Monitoring Guna Persil</li>
        <li class="breadcrumb-item active">Print Monitoring Guna Persil</li>
    </ol>

@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Monitoring Guna Persil</h3>
                            <button class="btn btn-sm btn-success float-right print"> Print</button>
                        </div>
                        <div class="card-body priview">
                            <h4>
                                <center> Laporan Monitoring Guna Persil</center>
                            </h4>
                            <div class="col">
                            <span>Stan Sesuai;

                            </span>
                            </div>
                            <br>
                            <div class="container">
                                <table class="table table-border">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>No PLG</th>
                                            <th>NAMA</th>
                                            <th>JALAN</th>
                                            <th>GANG</th>
                                            <th>NO</th>
                                            <th>NO TAMB</th>
                                            <th>DA</th>
                                            <th>KD TARIF</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($data) > 0)
                                        @foreach ($data as $row)
                                        <tr>
                                            <td>{{ $row->no_plg }}</td>
                                            <td>{{ $row->nama }}</td>
                                            <td>{{ $row->jalan }}</td>
                                            <td>{{ $row->gang}}</td>
                                            <td>{{ $row->nomor}}</td>
                                            <td>{{ $row->notamb}}</td>
                                            <td>{{ $row->da}}</td>
                                            <td>{{ $row->kd_tarif}}</td>
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
                url: `{{ url('mutasipelanggan/cetakmonitoring') }}`,
                dataType: 'html',
                data: {
                    _token: '{{ csrf_token() }}',
                    thbl: "{{ $formData['thbl'] }}",
                    periode: "{{ $formData['periode'] }}",
                    stan_persil: "{{ $formData['stan_persil'] }}"
                },
                beforeSend: function() {
                    loadingPrint()
                },
                success: function(res){
                    var w = window.open(`{{ url('mutasipelanggan/cetakmonitoring') }}`,'_blank');
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
