@extends('layout.app')

@push('css')
    <link href="http://fonts.cdnfonts.com/css/dot-matrix" rel="stylesheet">
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

@section('title', 'Laporan Mutasi Tarif Naik/Turun')

@section('namaHal', 'BA Mutasi Pelanggan')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Laporan Rekapitulasi Mutasi Tarif Naik/Turun</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class=" col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Preview Laporan Rekapitulasi Mutasi Tarif Naik/Turun</h3>
                            <a href="{{ route('cetakBulan') }}" class="btn btn-xs float-right btn-success print">Print</a>
                        </div>
                        <div class="card-body priview">

                            <div style="margin-left: 5px">
                                <div style="font-size:15px">PEMERINTAH KOTA SURABAYA</div>
                                <div style="font-size:15px">PERUSAHAAN DAERAH AIR MINUM</div>
                            </div>

                            <div style="text-align: center">
                                <div style="font-size:15px">LAPORAN MUTASI TARIF 
                                    @if($data['level'] == 'N')
                                        TARIF NAIK
                                    @else
                                        TARIF TURUN
                                    @endif
                                </div>
                                <div style="font-size:15px">BAGIAN HUBUNGAN LANGGANAN TIMUR</div>
                                <div style="font-size:15px">PERIODE
                                    @if($data['dasar'] == 'sah')
                                        PENGESAHAN
                                    @else
                                        PENERBITAN REKENING
                                    @endif
                                    : {{$data['periode']}}</div>
                            </div>
                            <div class="mx-auto mb-3" style="width: 250px;">
                                <span></span> <br>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Zona</th>
                                        <th>No P.A</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Tarif Lama</th>
                                        <th>Tarif Baru</th>
                                        <th>No B</th>
                                        <th>Tanggal B</th>
                                        <th>Nama Pen</th>
                                        <th>Bundel</th>
                                        <th>Nama Con</th>
                                        <th>Asal Pen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($data['filter'] as $row)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $row->zona }}</td>
                                            <td>{{ $row->no_plg }}</td>
                                            <td>{{ $row->nama }}</td>
                                            <td>{{ $row->jalan }} {{ $row->gang }} {{ $row->nomor }} {{ $row->notamb }}</td>
                                            <td>{{ $row->kd_tarif_l }}</td>
                                            <td>{{ $row->kd_tarif_b }}</td>
                                            <td>{{ $row->no_ba }}</td>
                                            <td>{{ $row->tgl_bamutasi }}</td>
                                            <td>{{ $row->nama_pengadu }}</td>
                                            <td>{{ $row->no_bundel }}</td>
                                            <td>{{ $row->namapetugas }}</td>
                                            <td>@if(trim($row->asal_pengaduan) == "L")
                                                Lain-lain
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach

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
            var level = `{{ $data['level'] }}`
            var dasar = `{{ $data['dasar'] }}`
            var periode = `{{ $data['periode'] }}`
            $.ajax({
                type: "POST",
                url: `{{ url('mutasipelanggan/cetakBulan') }}`,
                dataType: 'html',
                data: {
                    _token: '{{ csrf_token() }}',
                    level: level,
                    dasar: dasar,
                    periode: periode
                },
                beforeSend: function() {
                    loadingPrint()
                },
                success: function(res){
                    var w = window.open(`{{ url('mutasipelanggan/cetakBulan') }}`,'_blank');
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
