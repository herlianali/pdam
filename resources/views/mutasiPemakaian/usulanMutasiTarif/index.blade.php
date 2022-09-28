@extends('layout.app')
@section('title', 'Mutasi Pemakaian')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <style>
        p {
            color: red;
        }
    </style>
@endpush

@section('namaHal', 'Mutasi Pemakaian')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Mutasi Pemakaian</a></li>
        <li class="breadcrumb-item active">Usulan Mutasi Tarif</li>
    </ol>
@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Usulan Mutasi Tarif</h3>

                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-1"></div>
                                <div class="col-md-12">
                                    <form class="form-horizontal" action="" method="post">
                                        @csrf
                                        <div class="form-group row ">
                                            <label for="no_usulan" class="col-md-3 col-form-label">No Usulan</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="no_usulan" id="no_usulan"
                                                    onkeyup="valueing()">
                                            </div>
                                            <div class="col-md-2">
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#pelanggan"><i class="fas fa-search"></i> Cari
                                                    Pelanggan</button>
                                            </div>
                                            <label for="no_plg" class="col-form-label">No Pelanggan</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="no_plg"
                                                    id="no_plg"onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="tgl_usulan" class="col-md-3 col-form-label">Tanggal Usulan </label>
                                            <div class="col-md-2">
                                                <input type="date" class="form-control" name="tgl_usulan"
                                                    id="tgl_usulan"onkeyup="valueing()">
                                            </div>
                                            <label for="nama_plg" class="col-form-label">Nama Pelanggan </label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="nama_plg"
                                                    id="nama_plg"onkeyup="valueing()">
                                            </div>

                                        </div>
                                        <div class="form-group row ">
                                            <label for="tgl_diterima" class="col-md-3 col-form-label">Tanggal Diterima Rek
                                            </label>
                                            <div class="col-md-2">
                                                <input type="date" class="form-control" name="tgl_diterima"
                                                    id="tgl_diterima" onkeyup="valueing()">
                                            </div>
                                            <div class="col"></div>
                                            <div class="col-md-3">
                                                <p><b>Batas CutOff HUBUNGI TSI!</b></p>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="tombol" class="col-md-6 col-form-label"></label>
                                            <div class="col-md-6">
                                                <button class="btn btn-success btn-xs float-right" type="submit"><i
                                                        class="far fa-save"></i> Simpan </button>
                                                <button type="submit" class="btn btn-danger btn-xs float-right"><i
                                                        class="fas fa-undo"></i> Batal </button>
                                            </div>
                                        </div>
                                    </form>
                                    <br>

                                    <div class="card-header">
                                        <h3 class="card-title">Tambah Rek</h3>

                                    </div>
                                    <br>
                                    <form action="">
                                        <div class="form-group row ">
                                            <label for="periode" class="col-md-3 col-form-label"> Periode </label>
                                            <div class="col-md-2">
                                                <input type="date" class="form-control" name="periode" id="periode"
                                                    onkeyup="valueing()">
                                            </div>
                                            <label for="nota_restitusi" class="col-form-label"> No Nota Restitusi </label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="nota_restitusi"
                                                    id="nota_restitusi" onkeyup="valueing()">
                                            </div>
                                        </div>


                                        <table style="width:100%">
                                            <tr>
                                                <th></th>
                                                <th>Tarif</th>
                                                <th>Mtr Lalu</th>
                                                <th>Mtr Kini</th>
                                                <th>Pakai</th>
                                                <th>Rp Pakai</th>
                                                <th>Ukuran Meter</th>
                                                <th>Sewa Meter</th>
                                                <th>Ppn</th>
                                                <th>Retribusi</th>
                                                <th>Materai</th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <td>Telah Diterbitkan</td>
                                                <td> <select class="form-control" id="tarif" onkeyup="valueing()">
                                                        <option value=""> </option>
                                                        <option value=""> </option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                        name="mtr_lalu"id="mtr_lalu" onkeyup="valueing()">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="mtr_kini"
                                                        id="mtr_kini" onkeyup="valueing()">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="pakai"
                                                        id="pakai" onkeyup="valueing()">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="rp_pakai"
                                                        id="rp_pakai" onkeyup="valueing()">
                                                </td>
                                                <td>
                                                    <select class="form-control" id="uk_meter" onkeyup="valueing()">
                                                        <option value=""> </option>
                                                        <option value=""> </option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="sw_meter"
                                                        id="sw_meter" onkeyup="valueing()">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                        name="ppn"id="ppn" onkeyup="valueing()">
                                                </td>
                                                <td>
                                                    <select class="form-control" id="retribusi" onkeyup="valueing()">
                                                        <option value=""> </option>
                                                        <option value=""> </option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                        name="materai"id="materai" onkeyup="valueing()">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Seharusnya</td>
                                                <td> <select class="form-control" id="tarif" onkeyup="valueing()">
                                                        <option value=""> </option>
                                                        <option value=""> </option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                        name="mtr_lalu"id="mtr_lalu" onkeyup="valueing()">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="mtr_kini"
                                                        id="mtr_kini" onkeyup="valueing()">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="pakai"
                                                        id="pakai" onkeyup="valueing()">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="rp_pakai"
                                                        id="rp_pakai" onkeyup="valueing()">
                                                </td>
                                                <td>
                                                    <select class="form-control" id="uk_meter" onkeyup="valueing()">
                                                        <option value=""> </option>
                                                        <option value=""> </option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="sw_meter"
                                                        id="sw_meter" onkeyup="valueing()">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                        name="ppn"id="ppn" onkeyup="valueing()">
                                                </td>
                                                <td>
                                                    <select class="form-control" id="retribusi" onkeyup="valueing()">
                                                        <option value=""> </option>
                                                        <option value=""> </option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                        name="materai"id="materai" onkeyup="valueing()">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Selisih </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <input type="text" class="form-control" name="pakai"
                                                        id="pakai" onkeyup="valueing()">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="rp_pakai"
                                                        id="rp_pakai" onkeyup="valueing()">
                                                </td>
                                                <td></td>
                                                <td>
                                                    <input type="text" class="form-control" name="sw_meter"
                                                        id="sw_meter" onkeyup="valueing()">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="ppn"
                                                        id="ppn" onkeyup="valueing()">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="retribusi"
                                                        id="retribusi" onkeyup="valueing()">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="materai"
                                                        id="materai" onkeyup="valueing()">
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="form-group row mt-2 ">
                                            <label for="tombol" class="col-md-6 col-form-label"></label>
                                            <div class="col-md-6">
                                                <button class="btn btn-success btn-xs float-right" type="submit"><i
                                                        class="far fa-save"></i> Simpan Rek</button>
                                                <button type="submit" class="btn btn-danger btn-xs float-right"><i
                                                        class="fas fa-undo"></i> Batal Rek</button>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                    </form>
                                </div>
                            </div>



                            <table id="table" class="table table-bordered table-responsive-md table-condensed">

                                <thead>
                                    <tr>
                                        <th>Periode </th>
                                        <th>KD Tarif L</th>
                                        <th>MTRLalu L</th>
                                        <th>Pakai L</th>
                                        <th>RP PAKAI</th>
                                        <th>Rp_Restitusi</th>
                                        <th>Rp_Denda</th>
                                        <th>Rp_Bayar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>
                                            <button class="btn btn-warning btn-xs float-right" type="submit"><i
                                                    class="fas fa-trash"></i> hapus</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <div class="form-group">
                                <div class="form-check">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="radio" name="pilihan" id="nobonc" value="">
                                                    <label for="">No Bon C </label>
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="pilihan" id="nobonc" value="">
                                                </div>
                                                <div class="col"></div>
                                                <div class="col"></div>
                                                <div class="col"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="radio" name="pilihan" id="no_aduan" value="">
                                                    <label for="">No Pengaduan</label>
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="pilihan" id="no_aduan"value="">
                                                </div>
                                                <div class="col"></div>
                                                <div class="col"></div>
                                                <div class="col"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <textarea class="form-control" id="keterangan" onkeyup="valueing()" name="keterangan"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row mt-2 ">
                                                <label for="jns_pembayaran" class="col-md-2 col-form-label">Jenis
                                                    Pembayaran</label>
                                                <div class="col-md-2">
                                                    <select class="form-control" id="jns_pembayaran"onkeyup="valueing()">
                                                        <option value=" "> </option>
                                                        <option value=" "> </option>
                                                    </select>
                                                </div>
                                                <label for="no_pengesahan" class=" col-form-label">No Pengesahan</label>
                                                <div class="col-md-2">
                                                    <input type="date" class="form-control" name="no_pengesahan"
                                                        id="no_pengesahan"onkeyup="valueing()">
                                                </div>
                                                <button class="btn btn-info  btn-mt-2"
                                                    type="button"data-toggle="modal"data-target="#pegawai"><i
                                                        class="fa fa-search"></i>Cari BA</button>
                                                &nbsp;
                                            </div>
                                            <div class="form-group row mt-2 ">
                                                <label for="tgl_kasie" class="col-md-2 col-form-label">Tanggal
                                                    Kasie</label>
                                                <div class="col-md-2">
                                                    <input type="date" class="form-control" name="tgl_kasie"
                                                        id="tgl_kasie"onkeyup="valueing()">
                                                </div>
                                                <label for="tgl_kabag" class="col-form-label">Tanggal Kabag </label>
                                                <div class="col-md-2">
                                                    <input type="date" class="form-control"
                                                        name="tgl_kabag"id="tgl_kabag" onkeyup="valueing()">
                                                    <label for="tombol" class="col-md-6 col-form-label"></label>
                                                </div>
                                                <label for="tgl_dirdis" class="col-form-label">Tanggal Sah Dirdis </label>
                                                <div class="col-md-2">
                                                    <input type="date" class="form-control" name="tgl_dirdis"
                                                        id="tgl_dirdis" onkeyup="valueing()">
                                                    <label for="tombol" class="col-md-6 col-form-label"></label>
                                                </div>
                                                <div class="col">
                                                    <a
                                                        href="{{ route('cetakBA') }}"class="btn btn-md btn-info float-right"><i
                                                            class="fas fa-print"></i> Cetak BA </a>
                                                </div>
                                            </div>
                                            <div class="form-group row mt-2 ">
                                                <div class="col-md-12">
                                                    <button class="btn btn-success btn-sm float-right" type="submit"><i
                                                            class="far fa-save"></i>Simpan</button>
                                                    <button type="submit" class="btn btn-danger btn-sm float-right"><i
                                                            class="fas fa-undo"></i>Batal</button>
                                                </div>
                                            </div>
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
