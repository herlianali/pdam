@extends('layout.app')
@section('title', 'BA Mutasi Pelanggan')

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

    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Pengaduan')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
    <li class="breadcrumb-item active">Laporan Tarif Per Bendel</li>
</ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Laporan Tarif Per Bendel</h3>
                        </div>
                        <div class="card-body">
<form action="">
                            <div class="form-group row mt-2 ">
                                <label for="jp_dinas" class="col-md-3 col-form-label">Zona
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="jp_dinas" id="jp_dinas" onkeyup="valueing()">
                                </div>
                                <input type="checkbox" name="" id="">
                                <label for="jp_dinas" class="col-md-3 col-form-label">All
                                </label>
                            </div>
                            <div class="form-group row mt-2 ">
                                <label for="jp_dinas" class="col-md-3 col-form-label">Bundel
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="jp_dinas" id="jp_dinas" onkeyup="valueing()">
                                </div>
                                <input type="checkbox" name="" id="">
                                <label for="jp_dinas" class="col-md-3 col-form-label">All
                                </label>
                            </div>
                            <div class="form-group row mt-2 ">
                                <label for="jp_dinas" class="col-md-3 col-form-label">Tarif
                                </label>
                                <div class="col-md-7">
                                    <select class="form-control" id="wilayah" onkeyup="valueing()">

                                        <option value="">  </option>
                                        <option value="">  </option>

                                    </select>
                                </div>
                            </div>
                         
                                <p>Urut Berdasarkan : </p>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="laporan_bulanan_per_pertugas"
                                        name="lapora_bulanan_per_petugas">
                                    <label class="form-check-label">No Pelanggan</label>
                                <br>
                                    <input type="radio" class="form-check-input" id="laporan_bulanan_semua_petugas"
                                        name="laporan_bulanan_semua-petugas">
                                    <label class="form-check-label">Alamat</label>
                                
                                    </div>
                                    <div class="form-group row mt-2 ">
                                        <label for="jp_dinas" class="col-md-3 col-form-label">
                                        </label>
                                        <div class="col-md-9">
                                            <button type="submit" class="btn btn-info btn-sm float-right">Preview</button>
                                            <button class="btn btn-danger btn-sm float-right">Batal</button>
                                        </div>
                                    </div>
                                 

                                
                        </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print Preview Tarif per Bendel</h3>
                            <a href="" class="btn btn-sm btn-success float-right"><i class="fas fa-print"></i> Cetak</a>
                        </div>
                        <div class="card-body priview">
                            <p> Pemerintah Kota <br>
                                Surabaya <br>
                                PERUSAHAAN DAERAH AIR <br>
                            </p>
                            <div class="mx-auto mb-3" style="width: 250px;">
                                <span>Laporan Tarif Per Bendel</span> <br>
                                <div class="row">
                                    <div class="col">
                                      No
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                     No Bundel
                                    </div>
                                </div>

                              <div class="row">
                                <div class="col">
                                    Tanggal Cetak
                                </div>
                               
                                <div class="col-mr-1">
                                   Hal :
                                </div>
                              </div>
                            </div>
                           
                        </div>

                        <table class="table">
                            <thead>
                             
                                    <tr>
                                        <th>No</th>
                                        <th>No Pelanggan</th>
                                        
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Tarif Retribusi</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>

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
</script>
@endpush
