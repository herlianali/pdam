@extends('layout.app')
@section('title', 'Penetapan Tera Meter')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Penetapan Tera Meter</li>
    </ol>
@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Penetapan Tera Meter </h3>
                            <a href="{{ route('printpenetapanTeraMeter') }}" class="btn btn-sm btn-success float-right"><i
                                    class="fas fa-print"></i> Cetak</a>
                        </div>
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="col-md-1"></div>
                                <div class="col-md-9">
                                    <form class="form-horizontal" action="" method="POST">
                                    @csrf
                                        <div class="form-group row mt-2 ">
                                            <label for="nopenetapan" class="col-md-3 col-form-label"> Nomor
                                                Penetapan</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" value="TTRA{{ $no }}" name="no_tera" readonly>
                                            </div>
                                            <label for="tanggal" class="col-md-0 col-form-label"> Tanggal</label>
                                            <div class="col-md-4">
                                                <input type="date" class="form-control" id="date" name="date" value="{{ $date }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nobon" class="col-md-3 col-form-label"> No Bon C</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="no_bonc" name="no_bonc">
                                            </div>
                                            <button class="btn btn-info btn-mt-2" id="cari" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>&nbsp;
                                            <button class="btn btn-danger btn-mt-2" id="clear">
                                                <i class="fa fa-trash"></i>
                                                Bersihkan
                                            </button>
                                        </div>

                                        <br>
                                        <br>
                                        <div class="form-group row mt-2">
                                            <label for="nopel" class="col-md-3 col-form-label">Nopel</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="no_plg" name="no_plg" onkeyup="valueing()" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="nama" class="col-md-3 col-form-label">Nama </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="nama" name="nama" onkeyup="valueing()" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="alamat" class="col-md-3 col-form-label">Alamat</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" id="alamat" name="alamat" onkeyup="valueing()" readonly></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="kd_tarif" class="col-md-3 col-form-label">Tarif</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="kd_tarif" name="kd_tarif" onkeyup="valueing()" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="ukuran_mtr" class="col-md-3 col-form-label">UK Meter</label>
                                            <div class="col-md-1">
                                                <input type="text" class="form-control" id="ukuran_mtr" name="ukuran_mtr" onkeyup="valueing()" readonly>
                                            </div>
                                            <label for="biaya" class="col-form-label">Biaya</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="biaya_tera" name="biaya_tera" onkeyup="valueing()" readonly>
                                            </div>

                                            <label for="ppn" class="col-form-label">PPN</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="ppn" name="ppn" onkeyup="valueing()" readonly>
                                            </div>
                                            <label for="total" class="col-form-label"> Total </label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="total_biaya" name="total_biaya" onkeyup="valueing()" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <p> <b> Yang Mengajukan : </b></p>
                                        <div class="form-group row mt-2">
                                            <label for="nama_pengadu" class="col-md-3 col-form-label">Nama</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="nama_pengadu"
                                                    onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="alamat_pengadu" class="col-md-3 col-form-label">Alamat</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" name="alamat_pengadu" onkeyup="valueing()"></textarea>

                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="telp_pengadu" class="col-md-3 col-form-label">Telepon</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="telp_pengadu"
                                                    onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <button type="submit" class="btn btn-success float-right" id="simpan"><i
                                                class="far fa-save"></i>Simpan
                                            </button>
                                        </div>
                                </div>
                                </form>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
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

        $(document).on('click', '#cari', function(e) {
            e.preventDefault();
            let no_bonc = $('#no_bonc').val();
            $.ajax({
                type: "GET",
                url: `{{ url('master/penetapanTeraMeter') }}/` + no_bonc,
                data: {
                    id: no_bonc,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    var mtr = parseFloat(response.ukuran_mtr);
                    if (mtr==0.5 || mtr==0.75) {
                        var biaya_tera=45000
                    } else if (mtr==1 || mtr==1.5) {
                        var biaya_tera=60000
                    }else if (mtr==2) {
                        var biaya_tera=75000
                    }else if (mtr==3) {
                        var biaya_tera=120000
                    }else if (mtr==4) {
                        var biaya_tera=225000
                    }else if (mtr==6) {
                        var biaya_tera=300000
                    }else if (mtr==8) {
                        var biaya_tera=300000
                    }else if (mtr==10) {
                        var biaya_tera=450000
                    }else if (mtr==12) {
                        var biaya_tera=600000
                    }else if (mtr==16) {
                        var biaya_tera=750000
                    }
                    var ppn = biaya_tera * 0.1
                    var total_biaya = biaya_tera + biaya_tera * 0.1
                    $('#no_plg').val(response.no_plg)
                    $('#nama').val(response.nama)
                    $('#alamat').val(response.jalan.trim()+' '+response.gang.trim()+' '+response.nomor.trim()+' '+response.notamb)
                    $('#kd_tarif').val(response.kd_tarif)
                    $('#ukuran_mtr').val(mtr)
                    $('#biaya_tera').val(biaya_tera)
                    $('#ppn').val(ppn)
                    $('#total_biaya').val(total_biaya)
                    swal.close();
                }
            })
        })

        $(document).on('click', '#clear', function(e) {
            e.preventDefault();
            $('#no_bonc').val()
            $('#no_plg').val()
            $('#nama').val()
            $('#alamat').val()
            $('#kd_tarif').val()
            $('#ukuran_mtr').val()
            $('#biaya_tera').val()
            $('#total_biaya').val()
        })
    </script>
@endpush
