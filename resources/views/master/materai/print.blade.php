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

@section('title', 'Print Materai')

@section('namaHal', 'Master')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Materai</li>
        <li class="breadcrumb-item active">Print Materai</li>
    </ol>
    <br>
    <br>
    <a href="{{ route('printmaterai') }}" class="btn btn-sm btn-success float-right"><i class="fa fa-download"></i> Download
    </a>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('materai.index') }}" class="btn btn-xs btn-success float-right"><i class="fas fa-backward"></i> Kembali</a>
                            <h3 class="card-title">Preview Daftar Materai</h3>
                        </div>
                        <div class="card-body priview">
                            <p> Pemerintah Kota <br>
                                Surabaya <br>
                                PERUSAHAAN DAERAH AIR <br>
                            </p>
                            <div class="mx-auto mb-3" style="width: 250px;">
                                <span>
                                    <center> DAFTAR MATERAI </center>
                                </span> <br>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="20">No</th>
                                        <th width="30%">Nominal</th>
                                        <th width="50%">Materai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($matrai as $materai)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $materai->nominal }}</td>
                                            <td>{{ $materai->rp_materai }}</td>
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
