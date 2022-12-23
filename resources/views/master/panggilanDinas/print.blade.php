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

@section('title', 'Print Jenis Panggilan Dinas')

@section('namaHal', 'Master')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Jenis Panggilan Dinas</li>
        <li class="breadcrumb-item active">Print Jenis Panggilan Dinas</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Preview Jenis Panggilan Dinas</h3>
                            <button class="btn btn-xs btn-success float-right print">Print </button>
                        </div>
                        <div class="card-body priview">
                            <p> Pemerintah Kota <br>
                                Surabaya <br>
                                PERUSAHAAN DAERAH AIR <br>
                            </p>
                            <div class="mx-auto mb-3" style="width: 250px;">
                                <span>Table Master Jenis Panggilan Dinas</span> <br>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Keterangan</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['query'] as $p)
                                    <tr>
                                        <td>{{ $p->jns_pdinas }}</td>
                                        <td>{{ $p->keterangan }}</td>
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
                url: `{{ url('master/cetakpanggilanDinas') }}`,
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
                    var w = window.open(`{{ url('master/cetakpanggilanDinas') }}`,'_blank');
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
