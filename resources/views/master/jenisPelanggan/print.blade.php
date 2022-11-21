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

@section('title', 'Print Jenis Pelanggan')

@section('namaHal', 'Petugas')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Jenis Pelanggan</li>
        <li class="breadcrumb-item active">Print Jenis Pelanggan</li>
    </ol>
@endsection

@section('content')
    <section class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Preview Jenis Pelanggan</h3>
                            <a href="{{ route('cetakjenisPelanggan') }}" class="btn btn-xs float-right btn-success print">Print</a>
                        </div>
                        <div class="card-body priview">
                            <form class="form-horizontal">
                            <p> Pemerintah Kota <br>
                                Surabaya <br>
                                PERUSAHAAN DAERAH AIR <br>
                            </p>
                            <div class="mx-auto mb-3" style="width: 250px;">
                                <span>Table Master Jenis Pelanggan</span> <br>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Jenis Pelanggan</th>
                                        <th>Keterangan</th>
                                        <th>JNS Rekswasta</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jenisPelanggans as $jenis)
                                    <tr>
                                        <td>{{ $jenis->jns_pelanggan }}</td>
                                        <td>{{ $jenis->keterangan }}</td>
                                        <td>{{ $jenis->jns_rekswasta }}</td>
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
                url: `{{ url('master/cetakjenisPelanggan') }}`,
                dataType: 'html',
                data: {
                    _token: '{{ csrf_token() }}',
                },
                beforeSend: function() {
                    loadingPrint()
                },
                success: function(res){
                    var w = window.open(`{{ url('master/cetakjenisPelanggan') }}`,'_blank');
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