@extends('layout.app')
@section('title', 'BA Mutasi Pelanggan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link href="{{ asset('assets/plugins/font/dot-matrix.css') }}" rel="stylesheet">
    <style>
        .priview {
            font-family: 'Dot Matrix', sans-serif;
        }
        .container {
            border: 2px solid;
        }
    </style>
@endpush

@section('namaHal', 'BA Mutasi Pelanggan')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
        <li class="breadcrumb-item active">Cetak BA Perorangan</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class=" col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview BA Perorangan</h3>
                            <a href="{{ route('cetakBA') }}" class="btn btn-xs float-right btn-success print">Print</a>
                        </div>
                        <div class="card-body priview">
                            <div class="row">
                                <div class="col">
                                    <div style="font-size:15px">PEMERINTAH KOTAMADYA DATI II SURABAYA</div>
                                    <div style="font-size:15px">PERUSAHAAN DAERAH AIR MINUM</div>
                                    <div style="font-size:13px">Jl.Mayjen Prof Moestopo 2 </div>
                                    <div style="font-size:13px">Tlp.(031)5039373,5039392,5039676</div>
                                    <div style="font-size:13px">S U R A B A Y A</div>
                                </div>
                                <div class="col"></div>
                                <div class="col">
                                    <div class="border pl-2 w-80">
                                        <div class="row">
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col justify-content-between">
                                                        BAGIAN LANGGANAN {{$formFilter['filter'][0]->jalan}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="atas">
                                            <div class="row"> NOMOR : {{ $formFilter['filter'][0]->no_bamutasi }}  </div>
                                            <div class="row"> TANGGAL : {{ $formFilter['filter'][0]->tgl_bamutasi }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6>
                                <center><b>PEMBERITAHUAN <br>
                                        PENYESUAIAN KLASIFIKASI TARIF AIR MINUM</b></center>
                            </h6>
                            <p class="font">Kepada Yth: </p>
                            <div class="container">
                                <table>
                                    <tr>
                                        <td>No Pelanggan</td>
                                        <td>: {{ $formFilter['filter'][0]->no_plg }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td>: {{ $formFilter['filter'][0]->terhitung_tgl }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>: </td>
                                    </tr>
                                </table>
                            </div>
                            <br>
                            <div class="d-flex justify-content-center table-left" style="text-align: justify">
                                <p> Setelah diadakan penelitian secara administrasi dan pengecekan persil Saudara, maka
                                    dengan ini dieberitahukan bahwa terhadap pelanggan air minum PDAM Koday Dati II
                                    Surabaya, atas nama dan alamat diatas perlu diadakan penyesuain dalam penetapan
                                    klasifikasi tarif air minum sebagai berikut :
                                </p>
                            </div>
                            Kode Tarif <span> : {{ $formFilter['filter'][0]->kd_tarif_b }}/</span> <br>
                            Tabel Tarif <span>: 0 - 10 Rp. {{ $formFilter['filter'][0]->rp_progresiv1 }},-/M3</span> <span> 11 - 20 Rp. {{ $formFilter['filter'][0]->rp_progresiv2 }},-/M3 </span>
                                        <span>Diatas 20 Rp. {{ $formFilter['filter'][0]->rp_progresiv3 }},-/M</span>

                            <br>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <table>
                                        <tr>
                                            <td>Pemakaian Minumum </td>
                                            <td>: </td>
                                            <td>{{ $formFilter['filter'][0]->pakai_minim }} M3</td>
                                        </tr>
                                        <tr>
                                            <td>Berlaku mulai penerbitan rekening bulan</td>
                                        </tr>
                                        <tr>
                                            <td> Yang akan ditagihkan pada bulan</td>
                                            <td>{{ $formFilter['filter'][0]->keterangan }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <table>
                                        <h5><b>KETERANGAN</h5>
                                        <tr>
                                            <td>1. Dasar</td>
                                            <td>: </td>
                                            <td>694.2/T0000248.402.7.01/TTU/X/2002</td>
                                        </tr>
                                        <tr>
                                            <td>2. Kontrol No/Tanggal</td>
                                            <td>: </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3. Penggunaan Persil</td>
                                            <td>: </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4. Jenis Pelanggan</td>
                                            <td>: </td>
                                            <td>{{ $formFilter['filter'][0]->jns_tarif }}</td>
                                        </tr>
                                        <tr>
                                            <td>5. Kode Tarif Lama</td>
                                            <td>: </td>
                                            <td>{{ $formFilter['filter'][0]->kd_tarif_l }}</td>
                                        </tr>
                                        <tr>
                                            <td>6. Ukuran Meter</td>
                                            <td>: </td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <br>
                            <h5><b>LAIN LAIN</h5> <br>
                            <div class="row">
                                <div class="col">
                                    <div class="d-flex justify-content-center table-left" style="text-align: justify">
                                        Apabila dikemudian hari ternyata terjadi perubahan penggunaan persil, maka akan
                                        diadakan penyesuaian kode tarif secara sepihak oleh PDAM-KMS</p>
                                    </div>
                                    <div style="text-align: left;">Demikian hendaknya mendapat perhatian dan dimaklumi, terimakasih</div>
                                </div>
                            </div>
                            <div class="ttd">
                                <div class="row text-right">
                                    <div class="col justify-content-between">
                                        <p>A.n. Direksi Perusahaan Daerah Air Minum</p>
                                        <p>Kotamadya Daerah Tingkat II Surabaya</p>
                                        <p>Pjs DIREKTUR ADM. & KEUANGAN</p><br>
                                        <p><u>Agung Pribadhi, SE</u></p>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="notes">
                                <div class="col-ml-10">
                                    <div>
                                        <table>
                                            <tr>
                                                <td><u>Dibuat Rangkap 4:</u></td>
                                            </tr>
                                            <tr>
                                                <td>Lembar ke 1</td>
                                                <td>:</td>
                                                <td> Pelanggan</td>
                                            </tr>
                                            <tr>
                                                <td>Lembar  2</td>
                                                <td>:</td>
                                                <td> Bag. Rekening</td>
                                            </tr>
                                            <tr>
                                                <td>Lembar 3</td>
                                                <td>:</td>
                                                <td> Bag. Akuntansi cq. Kasi Piutang</td>
                                            </tr>
                                            <tr>
                                                <td>Lembar 4</td>
                                                <td>:</td>
                                                <td> Arsip Bag. Langganan</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>
@endsection
@push('js')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
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
            var start = `{{ $formFilter['start'] }}`
            var end = `{{ $formFilter['end'] }}`
            $.ajax({
                type: "POST",
                url: `{{ url('mutasipelanggan/cetakBA') }}`,
                dataType: 'html',
                data: {
                    _token: '{{ csrf_token() }}',
                    start: start,
                    end: end
                },
                beforeSend: function() {
                    loadingPrint()
                },
                success: function(res){
                    var w = window.open(`{{ url('mutasipelanggan/cetakBA') }}`,'_blank');
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
