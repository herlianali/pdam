@extends('layout.app')

@push('css')
    <link href="{{ asset('assets/plugins/font/dot-matrix.css') }}" rel="stylesheet">
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
@endsection

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Preview Jenis Pekerjaan</h3>
                            <a href="{{ route('cetakPekerjaan') }}" class="btn btn-xs float-right btn-success print">Print</a>
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
                                    @foreach ($data['query'] as $jenis)
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
            var filter = `{{ $data['filter'] }}`
            var start = `{{ $data['start'] }}`
            var end = `{{ $data['end'] }}`
            $.ajax({
                type: "POST",
                url: `{{ url('master/cetakPekerjaan') }}`,
                dataType: 'html',
                data: {
                    _token: '{{ csrf_token() }}',
                    filter: filter,
                    start: start,
                    end: end
                },
                beforeSend: function() {
                    loadingPrint()
                },
                success: function(res){
                    var w = window.open(`{{ url('master/cetakPekerjaan') }}`,'_blank');
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
