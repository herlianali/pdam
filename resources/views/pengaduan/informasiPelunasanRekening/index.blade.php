@extends('layout.app')
@section('title', 'Informasi Pelunasan Rekening')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Pengaduan')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Pengaduan</a></li>
        <li class="breadcrumb-item active">Informasi Pelunasan Rekening</li>
    </ol>
@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Pelunasan Rekening</h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-1"></div>
                                <div class="col-md-12">
                                    <form class="form-horizontal" action="" method="post">
                                        @csrf
                                        <div class="form-group row ">
                                            <label for="total_tunggakan" class="col-md-3 col-form-label">Total Tunggakan</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="total_tunggakan" id="total_tunggakan"
                                                    onkeyup="valueing()" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="biaya" class="col-md-3 col-form-label">Biaya Adm Tutupan Tetap
                                            </label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="biaya_adm_tutupan_tetap" id="biaya_adm_tutupan_tetap"
                                                    onkeyup="valueing()" disabled>
                                            </div>
                                        </div>

                                        <div class="form-group row ">
                                            <label for="grand_total" class="col-md-3 col-form-label">Grand Total</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="grand_total" id="grand_total"
                                                    onkeyup="valueing()" disabled>
                                            </div>
                                        </div>

                                    </form>


                                </div>
                            </div>
                        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Pelunasan Rekening</h3>
                            @if (count($data) > 0)
                            <form action="{{ route('printinformasiPelunasanRekening') }}" method="POST">
                                @csrf
                                <input type="text" name="periode" value="{{ $data['formHistory']['periode'] }}" style="display:none">
                                <input type="text" name="periode1" value="{{ $data['formHistory']['periode1'] }}" style="display:none">
                                <input type="text" name="no_plg" value="{{ $data['formHistory']['no_plg'] }}" style="display:none">
                                <button type="submit" id="cetak" class="btn btn-xs btn-info float-right"><i class="fas fa-print"></i> Cetak</button>
                            </form>
                            @endif

                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-1"></div>
                                <div class="col-md-12">
                                    <form class="form-horizontal" action="{{ route('informasiPelunasanRekening.show') }}" method="post">
                                        @csrf
                                        <div class="form-group row mt-2 ">
                                            <label for="periode" class="col-md-3 col-form-label"> Dari Periode </label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="periode" name="periode" placeholder="2020/10">
                                            </div>
                                            <label for="s.d" class="col-form-label"> s.d. </label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="periode1" name="periode1" placeholder="2021/10">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="no_plg" class="col-md-3 col-form-label">No Pelanggan </label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="no_plg" name="no_plg"
                                                    placeholder="Masukkan No Pelanggan Lalu Tekan Enter" >
                                            </div>
                                            <button class="btn btn-info btn-mt-2" id="cari" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>

                                        <div class="form-group row ">
                                            <label for="nama" class="col-md-3 col-form-label">Nama</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="nama" name="nama"
                                                    onkeyup="valueing()" readonly value="@if (count($data) > 0){{ $data['formHistory']['nama'] }} @endif">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="alamat" class="col-md-3 col-form-label">Alamat</label>
                                            <div class="col-md-4">
                                                <textarea class="form-control" id="alamat"  onkeyup="valueing()" name="alamat"  readonly >@if (count($data) > 0){{ $data['formHistory']['alamat'] }} @endif</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="jenis" class="col-md-3 col-form-label">Kondisi</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="kd_tarif" id="kd_tarif"
                                                    onkeyup="valueing()" readonly value="@if (count($data) > 0){{ $data['tablePlg'][0]->kondisi }} @endif">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                        <label for="" class="col-md-6 col-form-label"></label>
                                            <div class="col-md-5">
                                                <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-undo"></i> Reset</button>
                                            </div>
                                        </div>

                                    </form>

                                    
                                    <br>
                                    <br>
                                    <table id="table"
                                        class="table table-bordered table-responsive-md table-condensed">
                                        <thead>
                                            <tr>
                                                <th>Status </th>
                                                <th>Tgl_Lunas</th>
                                                <th>Periode</th>
                                                <th>Jenis</th>
                                                <th>Rp_Rekening</th>
                                                <th>Rp_Restitusi</th>
                                                <th>Rp_Denda</th>
                                                <th>Rp_Bayar</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if (count($data) > 0)
                                        @foreach ($data['tableHistory'] as $item)
                                            <tr>
                                                <td>{{$item->status}}</td>
                                                <td>{{$item->tgl_lunas}}</td>
                                                <td>{{$item->periode}}</td>
                                                <td>{{$item->jenis}}</td>
                                                <td>{{$item->rp_rekening}}</td>
                                                <td>{{$item->rp_restitusi}}</td>
                                                <td>{{$item->rp_denda}}</td>
                                                <td>{{$item->rp_bayar}}</td>
                                            </tr>
                                        @endforeach
                                        @endif
                                        </tbody>
                                            
                                    </table>

                                </div>
                            </div>
                        </div>
    </section>



@endsection

@push('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script>
        $(function() {
            $('#table').DataTable({

                //  "lengthChange": false,
                //   "autoWidth": false,
                //   "responsive": true,
                "oLanguage": {
                    "sSearch": "Keterangan : "
                },
                "pageLength": 5
            }).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
            $('#table1').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "pageLength": 5

            });
        });

        $('body').keypress(function(e){
        if (e.keyCode == 13)
        {
            $('#formHistori').submit();
        }
        });

        var showLoading = function() {
            swal.fire({
                title: "Mohon Tunggu !",
                html: "Sedang Memproses...",
                allowOutsideClick: false,
                showConfirmButton: false,
                willOpen: () => {
                    swal.showLoading()
                },
            })
        }

        // $(document).on('click', '#cari', function(e) {
        //     e.preventDefault();
        //     let periode = $('#periode').val();
        //     let periode1 = $('#periode1').val();
        //     let no_plg = $('#no_plg').val();
        //     $.ajax({
        //         type: "POST",
        //         dataType: "JSON",
        //         url: `{{ url('pengaduan/informasiPelunasanRekening') }}`,
        //         data: {
        //             _token: '{{ csrf_token() }}',
        //             _method: "POST",
        //             periode: periode,
        //             periode1: periode1,
        //             no_plg: no_plg,
        //         },
        //         beforeSend: function() {
        //             showLoading()
        //         },
        //         success: function(response) {
        //             console.log(response);
        //             $('#nama').val(response.nama)
        //             $('#alamat').val(response.alamat)
        //             $('#kd_tarif').val(response.kd_tarif)
        //             swal.close();
        //         }
        //     })
        // })
    </script>
@endpush
