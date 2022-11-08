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

@section('title', 'Print Jenis Pekerjaan')

@section('namaHal', 'Master')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Jenis Pekerjaan</li>
        <li class="breadcrumb-item active">Print Jenis Pekerjaan</li>
    </ol>
    <br>
    <br>
    <a href="{{ route('printjenisPekerjaan') }}" class="btn btn-sm btn-success float-right"><i class="fas fa-download"></i>Download</a>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Preview Jenis Pekerjaan</h3>
                            <button type="submit"
                            class="btn btn-xs float-right btn-success print">
                            Print
                            </button>
                        </div>
                        <div class="card-body priview">
                            <p> Pemerintah Kota <br>
                                Surabaya <br>
                                PERUSAHAAN DAERAH AIR <br>
                            </p>
                            <div class="mx-auto mb-3" style="width: 250px;">
                                <span>Table Master Jenis Pekerjaan</span> <br>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Jenis Pekerjaan</th>
                                        <th>Keterangan</th>
                                        <th>Jenis BON P</th>
                                        <th>Beban</th>
                                        <th>Kel BON P</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($filter as $jenis)
                                    <tr>
                                            <td>{{ $jenis->jns_pekerjaan }}</td>
                                            <td>{{ $jenis->keterangan }}</td>
                                            <td>{{ $jenis->jenis_bonp }}</td>
                                            <td>
                                                @if ($jenis->beban_plg == "0")
                                                    Tidak
                                                @else
                                                    Ya
                                                @endif
                                            </td>
                                            <td>{{ $jenis->kel_bonp }}</td>
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
