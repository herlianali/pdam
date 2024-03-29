@extends('layout.app')

@push('css')
    <link href="{{ asset('assets/plugins/font/dot-matrix.css') }}" rel="stylesheet">
    <style>
        .priview {
            font-family: 'Dot Matrix', sans-serif;
        }
        .atasan{
            border-top: 2px dashed gray;
        }
        table thead tr {
            border-bottom: 2px dashed rgb(102, 102, 102);
            border-top: 2px dashed rgb(102, 102, 102);
        }
      
    </style>
@endpush

@section('title', 'Print Penetapan Tera Meter')

@section('namaHal', 'Master')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Penetapan Tera Meter</li>
        <li class="breadcrumb-item active">Print Penetapan Tera Meter</li>
    </ol>
    <br>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Penetapan Tera Meter</h3>
                            <a href="{{ route('cetakpenetapanTeraMeter') }}" class="btn btn-xs float-right btn-success print">Print</a>
                        </div>
                        <div class="card-body priview">
                            <div class="row">
                                <div class="col">
                                    <div style="font-size:15px">Pemerintah Kota Surabaya</div>
                                    <div style="font-size:15px">Perusahaan Daerah Air Minum</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col"></div>
                                <div class="col">
                                        <tr>
                                            <td><b>Bagian Langganan Wilayah Timur</b></td>
                                        </tr>
                                    <table >
                                        <tr>
                                            <td>Nomor</td>
                                            <td>: {{ $data['cetak'][0]->no_tera }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal</td>
                                            <td>: {{ $data['cetak'][0]->tgl_tera }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Bon</td>
                                            <td>: {{ $data['cetak'][0]->no_bonc }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col"></div>
                                <div class="col">
                                    <tr>
                                        <td> 
                                            Berdasarkan SK Direksi <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>No 37, Tanggal 27 Februari 2022</td>
                                    </tr>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="mx-auto mb-3" style="width: 300px;">
                                <span>
                                    <center><b>SURAT PENETAPAN PEMBAYARAN
                                </span> <br>
                                <span>TERA METER AIR </b></center></span> <br>
                            </div>
                            <div class="atasan" >
                            <div class="row justify-content-between">
                                <div class="col-md-9">
                                    <table >
                                        <tr>
                                            <td> Nama</td>
                                            <td>: {{ $data['cetak'][0]->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>: {{ $data['cetak'][0]->jalan }} {{ $data['cetak'][0]->gang }} {{ $data['cetak'][0]->nomor }} {{ $data['cetak'][0]->notamb }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tarif</td>
                                            <td>: {{ $data['cetak'][0]->kd_tarif }}</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col">
                                    <table>
                                        <tr>
                                            <td>PA</td>
                                            <td>: {{ $data['cetak'][0]->no_pa }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nopel</td>
                                            <td>: {{ $data['cetak'][0]->no_plg }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <table class="table" style="text-align: center;">
                            <thead>
                                <tr>
                                    <th width="15%">Ukuran Meter Ai (Inci)</th>
                                    <th width="15%">Biaya Tera (Rp)</th>
                                    <th width="15%">Jumlah yang harus dibayar 
                                        + Ppn 10% (Rp)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['cetak'] as $cetak)
                                <tr>
                                    <td>{{ $cetak->uk_meter }}</td>
                                    <td>{{ $cetak->biaya_tera }}</td>
                                    <td>{{ $cetak->total_biaya }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                       <br>
                       <br>
                        <div class="ttd">
                            <div class="row text-center">
                                <div class="col justify-content-between">
                                    <p>Diketahui / disetujui</p>
                                    <p class="mb-5">Manajer Pemakaian Air</p>
                                    <p class="mb-n3">Nurlillah Satria Prat</p>
                                    <hr style="width: 50%">
                                    <p class="mt-n3">1.08.01499</p>
                                </div>
                                <div class="col ">
                                    <p>Diteliti Oleh</p>
                                    <p class="mb-5">Supervisor Kontrol</p>
                                    <p class="mb-n3">Minarnik, S.Si</p>
                                    <hr style="width: 50%">
                                    <p class="mt-n3">1.09.01504</p>
                                </div>
                                <div class="col">
                                    <p>Dibuat Oleh</p>
                                    <p class="mb-5">Petugas Pengaduan</p>
                                    <p class="mb-n3">Anugrah Santoso</p>
                                    <hr style="width: 50%">
                                    <p class="mt-n3">1.83.00551</p>
                                </div>
                            </div>
                        </div>
                        <div class="atasan">
                        <table class="table">
                        <div class="mx-auto mb-3" style="width: 300px;"><br>
                                <span>
                                    <center><b>SURAT PERNYATAAN</b></center>
                                </span>
                        </div>
                        
<div class="row">
<div class="col">
    <div style="font-size:15px">Yang bertanda tangan dibawah ini, </div>
    <div class="row justify-content-between">
    <div class="col-md-9">
        <table >
            <tr>
                <td> Nama</td>
                <td>: {{ $data['cetak'][0]->nama_pengadu }}</td>
            </tr>
            <tr>
                <td>Alamat & Telp</td>
                <td>: {{ $data['cetak'][0]->alamat_pengadu }} / {{ $data['cetak'][0]->telp_pengadu }}</td>
            </tr>
        </table>
                <td>Sebagai pelanggan / kuasa pelanggan PDAM Surabaya</td>
        <table>
            <tr>
                <td>Atas Nama</td>
                <td>: {{ $data['cetak'][0]->nama }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: {{ $data['cetak'][0]->jalan }} {{ $data['cetak'][0]->gang }} {{ $data['cetak'][0]->nomor }} {{ $data['cetak'][0]->notamb }}</td>
            </tr>
            <tr>
                <td>Nopel</td>
                <td>: {{ $data['cetak'][0]->no_plg }}</td>
            </tr>
            <tr>
                <td>Tarif</td>
                <td>: {{ $data['cetak'][0]->kd_tarif }}</td>
            </tr>
        </table>
                <td>Dengan ini menyatakan dengan sebenarnya bahwa</td>
                <td>: </td>
        <div style="font-size:15px">1. Kami mematuhi segala peraturan yang berlaku bagi pelanggan</div>
    <div style="font-size:15px">2. Kami bersedia menyaksikan pelaksanaaan Tera Meter Air PDAM Surabaya, di Jl. Prof. Dr. Moesto</div>
    <div style="font-size:15px">Tera Meter Air blok A Lantai I pukul 08.00 s/d 13.00 BBWI, selambat-lambatnya 3-7 hari sete</div>
    <div style="font-size:15px;">PDAM Surabaya.</div>
    <div style="font-size:15px;">(Setelah lewat 7 hari, pelaksanaan tera meter air akan dilakukan pihak PDAM tanpa menunggu p</div>
    <div style="font-size:15px;">3. Karena sesuatu hal kami tidak dapat menyaksikan pelaksanaan Tera Meter Air yang dilaksanakan</div>
    <div style="font-size:15px;">kami menyatakan menerima sepenuhnya Hasil Tera Meter Air yang telah dilaksanakan PDAM Surabaya</div>
    <div style="font-size:15px;">4. Apabila ternyata hasil tera meter air BAIR, maka kami bersedia membayar pemakaian air yang B</div>
    <div style="font-size:15px;">5. Untuk meter air a" keatas tera dilaksanakan di Bengkel Meter ( Komplek Intalasi Penjernihan</div>
    <div style="font-size:15px;">berkoordinasi dengan loker 25 / Tlp 5039373 pesawat 3111 / 3105)</div>
    </div>
    <div class="ttd">
    <div class="row text-center">
        <div class="col justify-content-between">
            <p>Surabaya, {{ $date }}</p>
            <p class="mb-5">Kami yang membuat pernyataan</p>
            <hr style="width: 25%">
        </div>
    </div>
    </div>
    <table>
        <tr>
            <td> No. TP</td>
            <td>: .......................</td>
        </tr>
        <tr>
            <td>No. KAS</td>
            <td>: .......................</td>
        </tr>
        <tr>
            <td>No. Bon P</td>
            <td>: .......................</td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>: .......................</td>
        </tr>
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
            var no_tera = `{{ $data['no_tera'] }}`
            var petcs = `{{ $data['petcs'] }}`
            $.ajax({
                type: "POST",
                url: `{{ url('master/cetakpenetapanTeraMeter') }}`,
                dataType: 'html',
                data: {
                    _token: '{{ csrf_token() }}',
                    no_tera: no_tera,
                    petcs: petcs
                },
                beforeSend: function() {
                    loadingPrint()
                },
                success: function(res){
                    var w = window.open(`{{ url('master/cetakpenetapanTeraMeter') }}`,'_blank');
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
