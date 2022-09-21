@extends('layout.app')
@section('title', 'Pengaduan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Pengaduan')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Pengaduan</a></li>
    <li class="breadcrumb-item active"> Edit Data Pengaduan</li>
</ol>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Pengaduan</h3>
                        <a href="{{ route('pengaduan') }}" class="btn btn-xs btn-warning float-right"><i class="fas fa-backward"></i> Kembali</a>
                    </div>
               
            <div class="card-body">
            <div class="row mb-5">
                <div class="col-md-1"></div>
                <div class="col-md-12">
                    <form class="form-horizontal">
                     
                        <div class="form-group row">
                            <label for="nama_pengadu" class="col-md-2 col-form-label">Nama Pengadu</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="nama_pengadu" name="nama_pengadu" onkeyup="valueing()">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="alamat_pengadu" class="col-md-2 col-form-label"> Alamat Pengadu </label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="alamat_pengadu" name="alamat_pengadu" onkeyup="valueing()">
                            </div>
                            </div>
                        <div class="form-group row ">
                            <label for="tlp_pengadu" class="col-md-2 col-form-label">Telepon Pengadu</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="tlp_pengadu" name="tlp_pengadu" onkeyup="valueing()">
                            </div>
                            <label for="periode" class="col-form-label">Periode/Rek</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="periode" name="periode" onkeyup="valueing()">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-1"></div>
            <div class="col-md-12">
                <form class="form-horizontal">

                        <div class="form-group row mt-2">
                            <label for="no_pengaduan" class="col-md-2 col-form-label">No Pengaduan</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="no_pengaduan" name="no_pengaduan" onkeyup="valueing()">
                            </div>
                        </div>
                       
                        <div class="form-group row ">
                            <label for="tgl_pengaduan" class="col-md-2 col-form-label">Tgl Pengaduan</label>
                            <div class="col-md-4">
                            <input type="date" class="form-control" id="tgl_pengaduan" name="tgl_pengaduan" onkeyup="valueing()">
                            </div>
                            </div>
                            <div class="form-group row ">
                            <label for="asal_pengaduan" class="col-md-2 col-form-label">Asal Pengaduan</label>
                            <div class="col-md-5">
                                <select class="form-control" id="asal_pengaduan" name="asal_pengaduan" onkeyup="valueing()">

                                    <option value="">  </option>
                                    <option value="">  </option>

                                </select>
                            </div>
                            </div>
                            <div class="form-group row ">
                            <label for="jns_pengaduan" class="col-md-2 col-form-label">Jenis Pengaduan</label>
                            <div class="col-md-5">
                                <select class="form-control" id="jns_pengaduan" name="jns_pengaduan" onkeyup="valueing()">

                                    <option value="">  </option>
                                    <option value="">  </option>

                                </select>
                            </div>
                            </div>
                            <div class="form-group row ">
                            <label for="uraian" class="col-md-2 col-form-label">Uraian</label>
                            <div class="col-md-5">
                                <textarea class="form-control" id="uraian" onkeyup="valueing()" name="uraian"></textarea>
                            </div>
                            </div>
                            <div class="form-group row ">
                            <label for="usulan_no_bonc" class="col-md-2 col-form-label">Usulan No BonC</label>
                            <div class="col-md-5">
                            <input type="text" class="form-control" id="usulan_no_bonc" name="usulan_no_bonc" onkeyup="valueing()">
                            </div>
                            </div>
                            <div class="form-group row ">
                            <label for="usulan_bonc_mtr" class="col-md-2 col-form-label">No BonC Mtr Garansi</label>
                            <div class="col-md-5">
                            <input type="text" class="form-control" id="usulan_bonc_mtr" name="usulan_bonc_mtr" onkeyup="valueing()">
                            </div>
                            </div>
                        </form>
                    </div>
                    <button type="submit" class=" btn-danger btn-sm float-right"><i class="fas fa-undo"></i> Batal</button>
                    <button class=" btn-success btn-sm float-right" type="submit"><i class="far fa-save"></i> Simpan</button>
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
        $(function () {
            $('#table').DataTable({
               
              // "lengthChange": false,
              //  "autoWidth": false,
             //   "responsive": true,
             "oLanguage": {
                    "sSearch": "Keterangan : "
                },
              //  "pageLength": 3
            }).buttons().container().appendTo('#table_wrapper .col-md-1:eq(0)');
            $('#table1').DataTable({
                "paging": true,
             //  "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
              //  "autoWidth": false,
               // "responsive": true,
               // "pageLength": 3
                
            });
        });
            function deletepDinas (id) {
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
            }).then(function (e) {
                if (e.value === true) {
                    let token = "{{ csrf_token() }}"
                    let _url = `/panggilanDinas/${id}`
                    console.log(_url)

                    $.ajax({
                        type: 'DELETE',
                        url: _url,
                        data: {_token: token},
                        success: function (resp) {
                            if (resp.success) {
                                swal.fire("Selesai!", resp.message, "Berhasil");
                                location.reload();
                            }else{
                                swal.fire("Gagal!", "Terjadi Kesalahan.", "error");
                            }
                        },
                        error: function(resp) {
                            swal.fire("Gagal!", "Terjadi Kesalahan.", "error" )
                        }
                    })
                }else{
                    e.dismiss;
                }
            }, function(dismiss) {
                return false;
            });
        }
    </script>
@endpush
