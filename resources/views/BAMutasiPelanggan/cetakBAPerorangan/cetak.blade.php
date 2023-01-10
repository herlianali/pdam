<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('assets/plugins/font/dot-matrix.css') }}" rel="stylesheet">
    <style type="text/css">
        p, span , .priview{
            font-family: 'Dot Matrix', sans-serif;
        }

        table{
            font-family: 'Dot Matrix', sans-serif;
        }

        table thead tr {
            border-bottom: 3px dotted rgb(102, 102, 102);
            border-top: 3px dotted rgb(102, 102, 102);
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak BA</title>
</head>
<body>
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
</body>
</html>

@push('js')
    <script src="{{ asset('assets/jquery.printPage.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".print").printPage();
        });
    </script>
@endpush