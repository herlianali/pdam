@extends('layout.app')
@section('title', 'BA Mutasi Pelanggan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'BA Mutasi Pelanggan')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
        <li class="breadcrumb-item active">Monitoring BA Mutasi Perorangan</li>
    </ol>
@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row mx-n3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <h3 class="card-title">Monitoring BA Mutasi Perorangan</h3>
                            <a href="{{ route('createmonitoringBAMutasiPerorangan') }}"
                                class="btn btn-xs btn-info float-right"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <form class="form-horizontal" action="" method="post">
                                        @csrf
                                        <a href="" class="btn btn-xs btn-info float-right"><i class="fas fa-print"></i> Preview</a>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="belumdisahkan" value="">
                                                                <label for="">Belum disahkan sampai tanggal</label>
                                                            </div>
                                                            <div class="col">
                                                                <input class="ml-3" type="text" name="pilihan" id="belumdisahkan" value="10/11/2022" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="telahdisahkan" value="">
                                                                <label for="">Telah disahkan tanggal</label>
                                                            </div>
                                                            <div class="col">
                                                                <input class="ml-3" type="date" name="pilihan" id="telahdisahkan" value="">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col ">
                                                                <input type="radio" name="pilihan" id="belumdikirimkebagrek"value="">
                                                                <label for="">Blm dikirim ke Bag.Rekening tgl</label>
                                                            </div>
                                                            <div class="col">
                                                                <input class="ml-4" type="date" name="pilihan" id="belumdikirimkebagrek" value="">
                                                            </div>
                                                        </div><div class="col ml-n2">
                                                            <input type="radio" name="pilihan" id="telahdikirimkebagrek"value="">
                                                            <label for=""> Telah dikirim ke Bag.Rekening tgl</label>
                                                            <input class="ml-5" type="date" name="pilihan" id="telahdikirimkebagrek" value="">
                                                        </div>
                                                        <div class="col ml-n2">
                                                            <label for="">No. BA</label>
                                                            <input style="margin-left: 15.8rem; width: 8rem" type="text"name="no_ba" id="no_ba" value="">
                                                            <button>cari BA</button>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="belumdiremajakan"
                                                                    value="">
                                                                <label for="">Belum diremajakan sampai tgl</label>
                                                            </div>
                                                            <div class="col">
                                                                <input class="ml-3" type="date" name="pilihan" id="belumdiremajakan" value="">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="telahdiremajakan"
                                                                    value="">
                                                                <label for="">Telah diremajakan tgl</label>
                                                            </div>
                                                            <div class="col">
                                                                <input class="ml-3" type="date" name="pilihan" id="telahdiremajakan" value="">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="telahdiremajakanbulan"
                                                                    value="">
                                                                <label for="">Telah diremajakan bulan</label>
                                                            </div>
                                                            <div class="col">
                                                                <input class="ml-3" type="date" name="pilihan"id="telahdiremajakanbulan" value="">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="dibuat_tgl"value="">
                                                                <label for="">Dibuat tanggal</label>
                                                            </div>
                                                            <div class="col">
                                                                <input class="ml-3" type="date" name="pilihan"id="dibuat_tgl" value="">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="dibuat_bln"value="">
                                                                <label for="">Dibuat bulan</label>
                                                            </div>
                                                            <div class="col">
                                                                <input class="ml-3" type="date" name="pilihan" id="dibuat_bln" value="">
                                                            </div>
                                                        </div>                           </div>
                                                </div>
                                                <br>
                                                <p>Jenis Mutasi :</p>
                                                <div class="row">
                                                    <label for="" class="col-form-label"></label>
                                                    <div class="col">
                                                        <input type="checkbox">
                                                        <label for="nama" class="col-form-label">A - Nama</label>
                                                    </div>
                                                    <div class="col">
                                                        <input type="checkbox">
                                                        <label for="da" class="col-form-label">C - DA</label>
                                                    </div>
                                                    <div class="col">
                                                        <input type="checkbox">
                                                        <label for="guna_persil" class="col-form-label">E - Guna Persil</label>
                                                    </div>
                                                    <div class="col">
                                                        <input type="checkbox">
                                                        <label for="ukuran_meter" class="col-form-label">G - Ukuran Meter</label>
                                                    </div>
                                                    <div class="col">
                                                        <input type="checkbox">
                                                        <label for="jns_pelanggan" class="col-form-label">I - Jenis Plg</label>
                                                    </div>
                                                    <div class="col">
                                                        <input type="checkbox">
                                                        <label for="no_bundel" class="col-form-label">k - No Bundel</label>
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                                <div class="row">
                
                                                    <label for="" class="col-form-label"></label>
                                                    <div class="col">
                                                        <input type="checkbox">
                                                        <label for="alamat" class="col-form-label">B - Alamat</label>
                                                    </div>
                                                    <div class="col">
                                                        <input type="checkbox">
                                                        <label for="kode_tarif" class="col-form-label">D - Kode Tarif</label>
                                                    </div>
                                                    <div class="col">
                                                        <input type="checkbox">
                                                        <label for="retribusi" class="col-form-label">F - Retribusi</label>
                                                    </div>
                                                    <div class="col">
                                                        <input type="checkbox">
                                                        <label for="no_pa" class="col-form-label">H - No PA</label>
                                                    </div>
                                                    <div class="col">
                                                        <input type="checkbox">
                                                        <label for="sub_zona" class="col-form-label">J - Sub Zona</label>
                                                    </div>
                                                    <div class="col">
                                                        <input type="checkbox">
                                                        <label for="no_meter" class="col-form-label">L - No Meter</label>
                                                    </div>
                                                    <div class="col"></div>
                                                </div>

                                            </div>

                                        </div>

                                        <button type="submit" class="btn btn-success btn-sm float-right"><i
                                                class="fa fa-filter"></i>Filter</button> <br>
                                        <br>

                                    </form>
                                </div>
                            </div>
                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>NO_BAMutasi</th>
                                        <th>TGL_BAMUTASI</th>
                                        <th>JNS_MUTASI</th>
                                        <th>NO_BONC</th>
                                        <th>NO_PLG</th>
                                        <th>KD_GUNAPERSIL</th>
                                        <th>KD_TARIF_L</th>
                                        <th>KD_TARIF_B</th>
                                        <th>ZONA_L</th>
                                        <th>ZONA_B</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>T0500006</td>
                                        <td>30/06/2005</td>
                                        <td>B</td>
                                        <td>TCL0503615</td>
                                        <td>1160261</td>
                                        <td>42</td>
                                        <td></td>
                                        <td>116</td>
                                        <td></td>
                                        <td></td>
                                        <td>

                                            <a href="{{ route('editmonitoringBAMutasiPerorangan') }}"
                                                class="btn btn-xs btn-info "><i class="fas fa-edit"></i> Edit</a>
                                            <a href="{{ route('persetujuanmonitoringBAMutasiPerorangan') }}"
                                                class="btn btn-xs btn-info ">Persetujuan</a>

                                        </td>
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
