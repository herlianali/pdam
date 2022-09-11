@extends('layout.app')

@push('css')
    <link href="http://fonts.cdnfonts.com/css/dot-matrix" rel="stylesheet">
    <style>
        .priview {
            font-family: 'Dot Matrix', sans-serif;
        }

        table thead tr {

            border-top: 3px dashed rgb(102, 102, 102);
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
    <br>
    <a href="{{ route('printpanggilanDinas') }}" class="btn btn-sm btn-success float-right"><i class=" fa fa-download"></i>
        Download</a>

@endsection



@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Filter Penetapan Tera Meter</h3>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <label for="nopenetapan" class="col-form-label"> Nomor Penetapan :</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="nomor" onkeyup="valueing()">
                                </div>
                                <label for="wilayah" class="col-form-label"> Petugas</label>
                                <div class="col-md-10">
                                    <select class="form-control" id="wilayah" onkeyup="valueing()">

                                        <option value="wilayah T"> Wilayah T </option>
                                        <option value="wilayah B"> Wilayah B </option>

                                    </select>
                                </div>
                                <br>

                                <button type="submit" class="btn btn-info btn-sm">Preview</button>
                                <button class="btn btn-danger btn-sm">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Penetapan Tera Meter</h3>

                        </div>
                        <div class="card-body priview">
                            <p> Pemerintah Kota Surabaya <br>
                                Perusahaan Daerah Air Minum <br>
                            </p>
                            <div class="mx-auto mb-3" style="width: 250px;">
                                <span>
                                    <center>SURAT PENETAPAN PEMBAYARAN
                                </span> <br>
                                <span>TERA METER AIR </center></span> <br>
                            </div>
                            <form action="">
                                <td>Nama : </td> <br>
                                <td>Alamat :</td>

                            </form>
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
