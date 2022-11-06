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

@section('title', 'Print Guna Persil')

@section('namaHal', 'Master')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Guna Persil</li>
        <li class="breadcrumb-item active">Print Guna Persil</li>
    </ol>
    <br>
    <br>
    <a href="{{ route('printgunaPersil') }}" class="btn btn-sm btn-success float-right"><i class="fas fa-download"></i> Download</a>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Guna Persil</h3>
                        </div>
                        <div class="card-body priview">
                            <p> Pemerintah Kota <br>
                                Surabaya <br>
                                PERUSAHAAN DAERAH AIR <br>
                            </p>
                            <div class="mx-auto mb-3" style="width: 250px;">
                                <span>Table Master Guna Pensil</span> <br>
                            </div>
                            <table class="table">
                            <thead>
                                    <tr>
                                        <th width="15%">Kode Guna Persil</th>
                                        <th width="50%">Keterangan</th>
                                        <th width="10%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kd_gunapersil as $gunaPersil)
                                        <tr>
                                            <td>{{ $gunaPersil->kd_gunapersil }}</td>
                                            <td>{{ $gunaPersil->keterangan }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
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
