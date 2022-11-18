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
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="scol-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Guna Persil</h3>
                            <a href="{{ route('cetakgunaPersil') }}" class="btn btn-xs float-right btn-success print">Print</a>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['query'] as $gunaPersil)
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
                url: `{{ url('master/cetakgunaPersil') }}`,
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
                    var w = window.open(`{{ url('master/cetakgunaPersil') }}`,'_blank');
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
