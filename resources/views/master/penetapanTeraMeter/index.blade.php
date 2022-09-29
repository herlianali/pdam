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
                                    <form class="form-horizontal">

                                        <div class="form-group row mt-2 ">
                                            <label for="nopenetapan" class="col-md-3 col-form-label"> Nomor
                                                Penetapan</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="nomor"
                                                    onkeyup="valueing()">
                                            </div>
                                            <label for="tanggal" class="col-md-0 col-form-label"> Tanggal</label>
                                            <div class="col-md-4">
                                                <input type="date" class="form-control" id="tanggal"
                                                    onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nobon" class="col-md-3 col-form-label"> No Bon C</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="nomorbon"
                                                    onkeyup="valueing()">
                                            </div>
                                        </div>

                                        <br>
                                        <br>
                                        <div class="form-group row mt-2">
                                            <label for="nopel" class="col-md-3 col-form-label">Nopel</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="nopel"
                                                    onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="nama" class="col-md-3 col-form-label">Nama </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="nama"
                                                    onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="alamat" class="col-md-3 col-form-label">Alamat</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" id="alamat" onkeyup="valueing()"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="tarif" class="col-md-3 col-form-label">Tarif</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="tarif"
                                                    onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="UKMeter" class="col-md-3 col-form-label">UK Meter</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="ukuranmeter"
                                                    onkeyup="valueing()">
                                            </div>
                                            <label for="biaya" class="col-form-label">Biaya</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="biaya"
                                                    onkeyup="valueing()">
                                            </div>

                                            <label for="ppn" class="col-form-label">PPN</label>
                                            <div class="col-md-1">
                                                <input type="text" class="form-control" id="ppn"
                                                    onkeyup="valueing()">
                                            </div>
                                            <label for="total" class="col-form-label"> Total </label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="total"
                                                    onkeyup="valueing()">
                                            </div>

                                        </div>
                                        <br>
                                        <br>
                                        <p> <b> Yang Mengajukan : </b></p>
                                        <div class="form-group row mt-2">
                                            <label for="nama" class="col-md-3 col-form-label">Nama</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="nama"
                                                    onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="alamat" class="col-md-3 col-form-label">Alamat</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" id="alamat" onkeyup="valueing()"></textarea>

                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="telepon" class="col-md-3 col-form-label">Telepon</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="telepon"
                                                    onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <button type="submit" class="btn btn-success float-right" id="simpan"><i
                                                    class="far fa-save"></i>Simpan</button>


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

        function deletepDinas(id) {
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
                    let _url = `/panggilanDinas/${id}`
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
