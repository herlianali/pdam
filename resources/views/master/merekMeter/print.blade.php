@extends('layout.app')

@push('css')
    <link href="http://fonts.cdnfonts.com/css/dot-matrix" rel="stylesheet">
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

@section('title', 'Print Merk Meter')

@section('namaHal', 'Master')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Merk Meter</li>
        <li class="breadcrumb-item active">Print Merk Meter</li>
    </ol>
    <br>
    <br>
    <a href="{{ route('printmerekMeter') }}" class="btn btn-sm btn-success float-right"><i class="fas fa-download"></i>
        Download</a>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Tabel Merk Meter</h3>
                            {{-- <a href="{{ route('merekMeter') }}" class="btn btn-sm btn-success float-right"><i class="fas fa-backward"></i> Kembali</a> --}}
                        </div>
                        <div class="card-body priview">
                            <p> Pemerintah Kota <br>
                                Surabaya <br>
                                PERUSAHAAN DAERAH AIR <br>
                                MINUM
                            </p>
                            <div class="mx-auto mb-3" style="width: 250px;">
                                <span>
                                    <center> TABEL MASTER MERK METER </center>
                                </span> <br>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="20%">No</th>
                                        <th width="30%">Kode</th>
                                        <th width="30%">Merk Meter</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($merkMeter as $merekMeter)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $merekMeter->kd_merk }}</td>
                                        <td>{{ $merekMeter->merk }}</td>
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
