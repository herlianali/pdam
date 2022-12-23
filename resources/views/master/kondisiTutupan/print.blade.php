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

@section('title', 'Print Kondisi Tutupan')

@section('namaHal', 'Master')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Kondisi Tutupan</li>
        <li class="breadcrumb-item active">Print Kondisi Tutupan</li>
    </ol>
    <br>
    <br>
   
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Preview Kondisi Tutupan</h3>
                            <a href="{{ route('cetakkondisiTutupan') }}" class="btn btn-xs float-right btn-success print">Print</a>
                        </div>
                        <div class="card-body priview">
                            <p>
                                <center> Pemerintah Kota Surabaya <br>
                                    PERUSAHAAN DAERAH AIR MINUM </center>
                            </p>
                            <br>
                            <div class="mx-auto mb-3" style="width: 250px;">
                                <span>
                                    <center> TABEL MASTER KONDISI TUTUPAN </center>
                                </span>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="20%">No</th>
                                        <th width="20%">Kode</th>
                                        <th width="60%">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kondTutupan as $KT)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $KT->kd_kondisi }}</td>
                                        <td>{{ $KT->keterangan }}</td>
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
            $.ajax({
                type: "POST",
                url: `{{ url('master/cetakkondisiTutupan') }}`,
                dataType: 'html',
                data: {
                    _token: '{{ csrf_token() }}',
                },
                beforeSend: function() {
                    loadingPrint()
                },
                success: function(res){
                    var w = window.open(`{{ url('master/cetakkondisiTutupan') }}`,'_blank');
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