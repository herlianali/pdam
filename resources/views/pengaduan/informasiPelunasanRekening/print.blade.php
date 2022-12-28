@extends('layout.app')

@push('css')
    <link href="{{ asset('assets/plugins/font/dot-matrix.css') }}" rel="stylesheet">
    <style>
        .priview {
            font-family: 'Dot Matrix', sans-serif;
        }

        table thead tr {
            border-bottom: 3px dashed rgb(102, 102, 102);
            border-top: 3px dashed rgb(102, 102, 102);
        }
        
    </style>
@endpush

@section('title', 'Print Informasi Pelunasan Rekening')

@section('namaHal', 'Pengaduan')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Pengaduan</a></li>
        <li class="breadcrumb-item active">Informasi Pelunasan Rekeninng</li>
        <li class="breadcrumb-item active">Print Informasi Pelunasan Rekening</li>
    </ol>
    <br>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Informasi Pelunasan Rekening</h3>
                            <button class="btn btn-sm btn-success float-right print"> Print</button>
                        </div>
                        <div class="card-body priview">
                            <div style="margin-left: 5px">
                                <div style="font-size:15px">PEMERINTAH KOTA SURABAYA</div>
                                <div style="font-size:15px">PERUSAHAAN DAERAH AIR MINUM</div>
                                <div style="font-size:15px">#Wilayah</div>
                            </div>
                            <table>
                                <p align="center">Daftar Rekening Pelanggan</p>
                                <p align="center">BULAN : {{$data['monthName']}} {{$awal[0]}} S/D {{$data['monthName1']}} {{$akhir[0]}}</p>
                            </table>

                            <table>
                                <tr>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <p>No Langganan </p>
                                            </div>
                                            <div class="col">
                                                <p>: {{ $data['formHistory']['no_plg'] }}</p>
                                            </div>
                                            <div class="col"></div>
                                            <div class="col"></div>
                                        </div>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <p>Nama </p>
                                            </div>
                                            <div class="col">
                                                <p>: {{ $data['tablePlg'][0]->nama }}</p>
                                            </div>
                                            <div class="col"></div>
                                            <div class="col"></div>
                                        </div>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <p>Alamat </p>
                                            </div>
                                            <div class="col">
                                                <p>: {{ $data['tablePlg'][0]->jalan }} {{ $data['tablePlg'][0]->gang }} {{ $data['tablePlg'][0]->nomor }} {{ $data['tablePlg'][0]->notamb }}</p>
                                            </div>
                                            <div class="col">
                                                <p></p>
                                            </div>
                                            <div class="col"></div>
                                        </div>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <p>Periode Tagih </p>
                                            </div>
                                            <div class="col">
                                                <p>: Periode Tagih : {{ $data['tablePlg'][0]->periode }}</p>
                                            </div>
                                            <div class="col"></div>
                                            <div class="col"></div>
                                        </div>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="container">
                                        <div class="row justify-content-between">
                                            <div class="col">
                                                <p>Tanggal Tutu </p>
                                            </div>
                                            <div class="col">
                                                <p>: {{ $data['tablePlg'][0]->tgl_tutup }}</p>
                                            </div>
                                            <div class="col"></div>
                                            <div class="col">
                                                <p>Tanggal Cetak : {{ $date }} </p>
                                            </div>
                                        </div>
                                    </div>
                                </tr>

                            </table>
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Status</th>
                                        <th>Tanggal Lunas</th>
                                        <th>Bln-Thn</th>
                                        <th>Tari</th>
                                        <th>Jn</th>
                                        <th>Rekening</th>
                                        <th>Restitus</th>
                                        <th>Denda</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($data) > 0)
                                    <div style="display: none">{{ $totalrekening = 0 }}</div>
                                    <div style="display: none">{{ $totalrestitusi = 0 }}</div>
                                    <div style="display: none">{{ $totaldenda = 0 }}</div>
                                    <div style="display: none">{{ $totalbayar = 0 }}</div>
                                    @foreach ($data['tableHistory'] as $item)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{$item->status}}</td>
                                            <td>{{$item->tgl_lunas}}</td>
                                            <td>{{$item->periode}}</td>
                                            <td>{{$item->kd_tarif}}</td>
                                            <td>{{$item->jenis}}</td>
                                            <td>{{$item->rp_rekening}}</td>
                                            <td>{{$item->rp_restitusi}}</td>
                                            <td>{{$item->rp_denda}}</td>
                                            <td>{{$item->rp_bayar}}</td>
                                            <div style="display: none">{{$totalrekening += $item->rp_rekening }}</div>
                                            <div style="display: none">{{$totalrestitusi += $item->rp_restitusi }}</div>
                                            <div style="display: none">{{$totaldenda += $item->rp_denda }}</div>
                                            <div style="display: none">{{$totalbayar += $item->rp_bayar }}</div>
                                        </tr>
                                    @endforeach
                                    @endif
                                    <thead>
                                    <tr>
                                        <td>Jumlah Total</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>{{$totalrekening}}</td>
                                        <td>{{$totalrestitusi}}</td>
                                        <td>{{$totaldenda}}</td>
                                        <td>{{$totalbayar}}</td>
                                    </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <td>Total rekening yang belum</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>{{$totalbayar}}</td>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <td>Total rekening yang telah t</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>{{$totalbayar}}</td>
                                        </tr>
                                    </thead>
                                </tbody>
                            </table>
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
        const box = document.getElementById('startEnd');

        function clickRadio() {
            if (document.getElementById('semuakd').checked) {
                box.style.display = "none"
            } else {
                box.style.display = "block"
            }
        }

        const radioButtons = document.querySelectorAll('input[name="filter"]');
        radioButtons.forEach(radio => {
            radio.addEventListener('click', clickRadio)
        });

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
                url: `{{ url('pengaduan/cetakinformasiPelunasanRekening') }}`,
                dataType: 'html',
                data: {
                    _token: '{{ csrf_token() }}',
                    periode: "{{ $data['formHistory']['periode'] }}",
                    periode1: "{{ $data['formHistory']['periode1'] }}",
                    no_plg: "{{ $data['formHistory']['no_plg'] }}"
                },
                beforeSend: function() {
                    loadingPrint()
                },
                success: function(res){
                    var w = window.open(`{{ url('pengaduan/cetakinformasiPelunasanRekening') }}`,'_blank');
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
