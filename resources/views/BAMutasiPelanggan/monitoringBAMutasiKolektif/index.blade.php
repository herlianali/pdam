@extends('layout.app')
@section('title', 'BA Mutasi Pelanggan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'BA Mutasi Pelanggan')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
        <li class="breadcrumb-item active">Monitoring BA Mutasi Kolektif</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row mx-n3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Monitoring BA Mutasi Kolektif</h3>
                            <a href="{{ route('createmonitoringBAMutasiKolektif') }}"class="btn btn-xs btn-info float-right"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <form class="form-horizontal" action="" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <div class="form-check">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="belumdisahkan" value="">
                                                                <label for="">Belum disahkan sampai tanggal</label>
                                                            </div>
                                                            <div class="col">
                                                                {{-- <input class="ml-3" type="date" name="pilihan" id="belumdisahkan" value="" disabled> --}}
                                                                <label class="ml-3" for="">09/11/2022</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="telahdisahkan" value="">
                                                                <label for="">Telah disahkan tanggal</label>
                                                            </div>
                                                            <div class="col">
                                                                <input class="ml-3" type="text" name="pilihan" id="telahdisahkan" value="22/06/2005">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="belumdikirimkebagrek"value="">
                                                                <label for="">Belum dikirim ke Bag.Rekening tgl</label>
                                                            </div>
                                                            <div class="col">
                                                                <label class="ml-3" for="">09/11/2022</label>
                                                                {{-- <input class="ml-3" type="date" name="pilihan" id="belumdikirimkebagrek" value="">
                                                                 --}}
                                                            </div>
                                                        </div>
                                                        <div class="col ml-n2">
                                                            <input type="radio" name="pilihan" id="telahdikirimkebagrek"value="">
                                                            <label for=""> Telah dikirim ke Bag.Rekening tgl</label>
                                                            <input class="ml-5" type="date" name="pilihan"id="telahdikirimkebagrek" value="">
                                                        </div>
                                                        <div class="col ml-n2">
                                                            <label for="">No. BA</label>
                                                            <input style="margin-left: 15.8rem; width: 10rem" type="text"name="no_ba" id="no_ba" value="">
                                                            <button>cari BA</button>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="belumdiremajakan"
                                                                    value="">
                                                                <label for="">Belum diremajakan sampai tgl</label>
                                                            </div>
                                                            <div class="col">
                                                                {{-- <input class="ml-3" type="date" name="pilihan" id="belumdiremajakan" value=""> --}}
                                                                <label class="ml-3" for="">09/11/2022</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="telahdiremajakan"
                                                                    value="">
                                                                <label for="">Telah diremajakan tgl</label>
                                                            </div>
                                                            <div class="col">
                                                                <input class="ml-3" type="date" name="pilihan" id="telahdiremajakan" value="">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="telahdiremajakanbulan"
                                                                    value="">
                                                                <label for="">Telah diremajakan bulan</label>
                                                            </div>
                                                            <div class="col">
                                                                <input class="ml-3" type="date" name="pilihan"id="telahdiremajakanbulan" value="">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="dibuat_tgl"value="">
                                                                <label for="">Dibuat tanggal</label>
                                                            </div>
                                                            <div class="col">
                                                                <input class="ml-3" type="text" name="pilihan"id="dibuat_tgl" value="09/11/2022">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="dibuat_bln"value="">
                                                                <label for="">Dibuat bulan</label>
                                                            </div>
                                                            <div class="col">
                                                                <input class="ml-3" type="date" name="pilihan" id="dibuat_bln" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success btn-sm float-right"><i class="fa fa-filter"></i> Filter</button> <br>
                                            <br>
                                            <a href="{{ route('preview') }}"class="btn btn-sm btn-info float-right"><i class="fas fa-print"></i> Preview</a>
                                    </form>
                                    <table id="table" class="table table-bordered table-responsive table-condensed">
                                        <thead>
                                            <tr>
                                                <th>No Bamutkol</th>
                                                <th>Tgl Bamutasi</th>
                                                <th>Jenis Mutasi</th>
                                                <th>No Mutasi</th>
                                                <th>Rp Retribusi</th>
                                                <th>Terhitung Tgl</th>
                                                <th>Bln Terbit</th>
                                                <th>Dasar</th>
                                                <th>Tgl Kasi</th>
                                                <th>Tgl Kabag</th>
                                                <th>Tgl Kirim Rekening</th>
                                                <th>Tgl Peremajaan</th>
                                                <th>Kd Retribusi</th>
                                                <th>Batal</th>
                                                <th>Tgl Batal</th>
                                                <th>No Pengaduan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>TD050766</td>
                                                <td>21/06/2005</td>
                                                <td>DEFI</td>
                                                <td>TCP</td>
                                                <td></td>
                                                <td></td>
                                                <td>112005</td>
                                                <td>Lebar Jalan 10 M. Mempunyai Nilai Ekonomi Tinggi</td>
                                                <td>22/06/2005</td>
                                                <td>22/06/2005</td>
                                                <td>28/09/2005</td>
                                                <td>18/10/2005</td>
                                                <td></td>
                                                <td>0</td>
                                                <td></td>
                                                <td>T20050013989</td>
                                            </tr>
                                            <tr>
                                                <td>TD050769</td>
                                                <td>21/06/2005</td>
                                                <td>DEFI</td>
                                                <td>TCP</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>Lebar Jalan 9 M.</td>
                                                <td>22/06/2005</td>
                                                <td>22/06/2005</td>
                                                <td>21/06/2005</td>
                                                <td></td>
                                                <td></td>
                                                <td>0</td>
                                                <td></td>
                                                <td>T20050013264</td>
                                            </tr>
                                            <tr>
                                                <td>TD050770</td>
                                                <td>21/06/2005</td>
                                                <td>DEFI</td>
                                                <td>TCP</td>
                                                <td></td>
                                                <td></td>
                                                <td>112005</td>
                                                <td>Lebar Jalan 8 M.</td>
                                                <td>22/06/2005</td>
                                                <td>22/06/2005</td>
                                                <td>28/09/2005</td>
                                                <td>14/10/2005</td>
                                                <td></td>
                                                <td>0</td>
                                                <td></td>
                                                <td>T20050013985</td>
                                            </tr>
                                            <tr>
                                                <td>TD050771</td>
                                                <td>21/06/2005</td>
                                                <td>DEFI</td>
                                                <td>TCP</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>Lebar Jalan 6 M.</td>
                                                <td>22/06/2005</td>
                                                <td>22/06/2005</td>
                                                <td>21/06/2005</td>
                                                <td></td>
                                                <td></td>
                                                <td>0</td>
                                                <td></td>
                                                <td>T20050013294</td>
                                            </tr>
                                            <tr>
                                                <td>TD050775</td>
                                                <td>21/06/2005</td>
                                                <td>DEFI</td>
                                                <td>TCP</td>
                                                <td></td>
                                                <td></td>
                                                <td>112005</td>
                                                <td>Lebar Jalan 10 M.</td>
                                                <td>22/06/2005</td>
                                                <td>22/06/2005</td>
                                                <td>18/10/2005</td>
                                                <td>18/10/2005</td>
                                                <td></td>
                                                <td>0</td>
                                                <td></td>
                                                <td>T20050013537</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table id="table2" class="table table-bordered table-responsive table-condensed">
                                        <thead>
                                            <tr>
                                                <th>No Pelanggan</th>
                                                <th>Nama</th>
                                                <th>Jalan</th>
                                                <th>Wilayah</th>
                                                <th>Kecamatan</th>
                                                <th>Kelurahan</th>
                                                <th>Jns Pelanggan</th>
                                                <th>Zona</th>
                                                <th>Kd GunaPersil</th>
                                                <th>Kd Tarif</th>
                                                <th>No Meter</th>
                                                <th>Ukuran Meter</th>
                                                <th>Kd Retribusi</th>
                                                <th>Rp Retribusi</th>
                                                <th>No Pa</th>
                                                <th>No Bundel</th>
                                                <th>Register</th>
                                                <th>Tgl Pasang</th>
                                                <th>Tgl Tutup</th>
                                                <th>Tgl Buka</th>
                                                <th>Bln Terbit</th>
                                                <th>Status</th>
                                                <th>Bulan Akhir</th>
                                                <th>Meter Akhir</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2112812</td>
                                                <td>Eko Purwanto</td>
                                                <td>Pacar Kembang</td>
                                                <td>T</td>
                                                <td>01</td>
                                                <td>02</td>
                                                <td>SSS</td>
                                                <td>211</td>
                                                <td>41</td>
                                                <td>4B.2</td>
                                                <td>21206512</td>
                                                <td>0.5</td>
                                                <td>057</td>
                                                <td>11500</td>
                                                <td>260873</td>
                                                <td>13</td>
                                                <td></td>
                                                <td>31/08/2022</td>
                                                <td>06/06/2018</td>
                                                <td>09/06/2018</td>
                                                <td>102019</td>
                                                <td>BK</td>
                                                <td>102022</td>
                                                <td>43</td>
                                            </tr>
                                            <tr>
                                                <td>2111351</td>
                                                <td>Junedi Poerbianto</td>
                                                <td>Pacar Kembang</td>
                                                <td>T</td>
                                                <td>01</td>
                                                <td>02</td>
                                                <td>SSS</td>
                                                <td>211</td>
                                                <td>41</td>
                                                <td>4B.2</td>
                                                <td>21206512</td>
                                                <td>0.5</td>
                                                <td>057</td>
                                                <td>11500</td>
                                                <td>260873</td>
                                                <td>13</td>
                                                <td></td>
                                                <td>31/08/2022</td>
                                                <td>06/06/2018</td>
                                                <td>09/06/2018</td>
                                                <td>102019</td>
                                                <td>BK</td>
                                                <td>102022</td>
                                                <td>43</td>
                                            </tr>
                                            <tr>
                                                <td>2112445</td>
                                                <td>Sardi</td>
                                                <td>Pacar Kembang</td>
                                                <td>T</td>
                                                <td>01</td>
                                                <td>02</td>
                                                <td>SSS</td>
                                                <td>211</td>
                                                <td>41</td>
                                                <td>4B.2</td>
                                                <td>21206512</td>
                                                <td>0.5</td>
                                                <td>057</td>
                                                <td>11500</td>
                                                <td>260873</td>
                                                <td>13</td>
                                                <td></td>
                                                <td>31/08/2022</td>
                                                <td>06/06/2018</td>
                                                <td>09/06/2018</td>
                                                <td>102019</td>
                                                <td>BK</td>
                                                <td>102022</td>
                                                <td>43</td>
                                            </tr>
                                            <tr>
                                                <td>2111340</td>
                                                <td>Kastari</td>
                                                <td>Pacar Kembang</td>
                                                <td>T</td>
                                                <td>01</td>
                                                <td>02</td>
                                                <td>SSS</td>
                                                <td>211</td>
                                                <td>41</td>
                                                <td>4B.2</td>
                                                <td>21206512</td>
                                                <td>0.5</td>
                                                <td>057</td>
                                                <td>11500</td>
                                                <td>260873</td>
                                                <td>13</td>
                                                <td></td>
                                                <td>31/08/2022</td>
                                                <td>06/06/2018</td>
                                                <td>09/06/2018</td>
                                                <td>102019</td>
                                                <td>BK</td>
                                                <td>102022</td>
                                                <td>43</td>
                                            </tr>
                                            <tr>
                                                <td>2111766</td>
                                                <td>Sutarno</td>
                                                <td>Pacar Kembang</td>
                                                <td>T</td>
                                                <td>01</td>
                                                <td>02</td>
                                                <td>SSS</td>
                                                <td>211</td>
                                                <td>41</td>
                                                <td>4B.2</td>
                                                <td>21206512</td>
                                                <td>0.5</td>
                                                <td>057</td>
                                                <td>11500</td>
                                                <td>260873</td>
                                                <td>13</td>
                                                <td></td>
                                                <td>31/08/2022</td>
                                                <td>06/06/2018</td>
                                                <td>09/06/2018</td>
                                                <td>102019</td>
                                                <td>BK</td>
                                                <td>102022</td>
                                                <td>43</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script>
        $(function() {
            $('#table').DataTable({

                //  "lengthChange": false,
                //   "autoWidth": false,
                //   "responsive": true,
                "oLanguage": {
                    "sSearch": "No Pelanggan : "
                },
                "pageLength": 5
            }).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
            $('#table1').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "pageLength": 5

            });
        });
    </script>
@endpush
