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
                                                    onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="biaya" class="col-md-3 col-form-label">Biaya Adm Tutupan Tetap
                                            </label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="biaya_adm_tutupan_tetap" id="biaya_adm_tutupan_tetap"
                                                    onkeyup="valueing()">
                                            </div>
                                        </div>

                                        <div class="form-group row ">
                                            <label for="grand_total" class="col-md-3 col-form-label">Grand Total</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="grand_total" id="grand_total"
                                                    onkeyup="valueing()">
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
                            
                            <a href="{{ route('printinformasiPelunasanRekening') }}"
                            class="btn btn-xs btn-success float-right"><i class="fas fa-print"></i> Cetak</a>

                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-1"></div>
                                <div class="col-md-12">
                                    <form class="form-horizontal" action="" method="post">
                                        @csrf
                                        <div class="form-group row mt-2 ">
                                            <label for="periode" class="col-md-3 col-form-label"> Dari Periode </label>
                                            <div class="col-md-2">
                                                <input type="year" class="form-control" id="periode" name="periode" 
                                                    onkeyup="valueing()">
                                            </div>
                                            <label for="s.d" class="col-form-label"> s.d. </label>
                                            <div class="col-md-2">
                                                <input type="year" class="form-control" id="s.d" name="periode"
                                                    onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="no_pelanggan" class="col-md-3 col-form-label">No Pelanggan </label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="nopelanggan" value="2072678"
                                                    onkeyup="valueing()"
                                                    placeholder="Masukkan No Pelanggan Lalu Tekan Enter">
                                            </div>
                                        </div>

                                        <div class="form-group row ">
                                            <label for="nama" class="col-md-3 col-form-label">Nama</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="nama" name="nama" value="HALAIM PRANATA"
                                                    onkeyup="valueing()" readonly value="">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="alamat" class="col-md-3 col-form-label">Alamat</label>
                                            <div class="col-md-4">
                                                <textarea class="form-control" id="alamat"  onkeyup="valueing()" name="alamat"  value =" " readonly value="">MANYAR KERTOARJO 5/4</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="kondisi" class="col-md-3 col-form-label">Kondisi</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="kondisi" id="kondisi" value =" 05 - Rumah Kosong"
                                                    onkeyup="valueing()" readonly value="">
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
                                                    <tr>
                                                        <td>LUNAS</td>
                                                        <td>21/01/2020</td>
                                                        <td>01-2020</td>
                                                        <td>N</td>
                                                        <td>3.956.900</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>3.956.900</td>
                                                    </tr>
                                                    <tr>
                                                        <td>LUNAS</td>
                                                        <td>02/03ph/2020</td>
                                                        <td>02-2020</td>
                                                        <td>N</td>
                                                        <td>1.439.400</td>
                                                        <td>0</td>
                                                        <td>202.000</td>
                                                        <td>1.642.000</td>
                                                    </tr>
                                                </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
    </section>



@endsection

@push('js')
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

        function deletepanggilanDinas(id) {
            swal.fire({
                title: "Hapus Data?",
                icon: 'question',
                text: "Apakah Anda Yakin Ingin Menghapus",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#e74c3c",
                confirmButtonText: "Iya",
                cancelButtonText: "Tidak",
                reverseButtons: !0
            }).then(function(e) {
                if (e.value === true) {
                    let token = "{{ csrf_token() }}"
                    let _url = `/pDinas/${id}`
                    console.log(_url)

                    $.ajax({
                        type: 'DELETE',
                        url: _url,
                        data: {
                            _token: token
                        },
                        success: function(resp) {
                            if (resp.success) {
                                swal.fire("Selesai!", resp.message, "Berhasil");
                                location.reload();
                            } else {
                                swal.fire("Gagal!", "Terjadi Kesalahan.", "error");
                            }
                        },
                        error: function(resp) {
                            swal.fire("Gagal!", "Terjadi Kesalahan.", "error")
                        }
                    })
                } else {
                    e.dismiss;
                }
            }, function(dismiss) {
                return false;
            });
        }
    </script>
@endpush
