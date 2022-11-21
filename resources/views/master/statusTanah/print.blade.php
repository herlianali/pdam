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

@section('title', 'Print Status Tanah')

@section('namaHal', 'Master')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Status Tanah</li>
        <li class="breadcrumb-item active">Print Status Tanah</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Preview Status Tanah</h3>
                            <a href="{{ route('cetakstatusTanah') }}" class="btn btn-sm btn-success float-right print"> Print</a>
                        </div>
                        <div class="card-body priview">
                        <form class="form-horizontal">
                            <p>
                                Pemerintah Kota Surabaya <br>
                                PERUSAHAAN DAERAH AIR MINUM
                            </p>
                            <br>
                            <div class="mx-auto mb-3" style="width: 250px;">
                                <span>
                                    Tabel Master Status Tanah
                                </span>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="30%">Status Tanah</th>
                                        <th width="70%">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($stTanah as $statusTanah)
                                        <tr>
                                            <td>{{ $statusTanah->status_tanah }}</td>
                                            <td>{{ $statusTanah->keterangan }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        </form>
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
            $.ajax({
                type: "POST",
                url: `{{ url('master/cetakstatusTanah') }}`,
                dataType: 'html',
                data: {
                    _token: '{{ csrf_token() }}',
                },
                beforeSend: function() {
                    loadingPrint()
                },
                success: function(res){
                    var w = window.open(`{{ url('master/cetakstatusTanah') }}`,'_blank');
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
