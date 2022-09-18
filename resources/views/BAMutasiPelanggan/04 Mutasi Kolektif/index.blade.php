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
        <li class="breadcrumb-item active">Mutasi Kolektif</li>
    </ol>
@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"> Mutasi Kolektif</h3>
                            <a href="" class="btn btn-xs btn-info float-right"><i class="fas fa-print"></i> Cetak Lampiran</a>
                            
                            <a href="" class="btn btn-xs btn-info float-right"><i class="fas fa-print"></i> Cetak BA</a>
                        </div>
                    
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <form class="form-horizontal" action="" method="post">
                                        @csrf
                                        <div class="form-group row mt-2">
                                            <label for="kode" class="col-md-2 col-form-label">NO BA </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="kode" name="kode" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="kode" class="col-md-2 col-form-label">Tanggal BA </label>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control" id="kode" name="kode" onkeyup="valueing()">
                                            </div>
                                        </div> <div class="form-group row mt-2">
                                            <label for="kode" class="col-md-2 col-form-label">Jenis Penomoran </label>
                                            <div class="form-group">
                                                <div class="form-check" >
                                                    <input type="radio" name="filter" id="semuakd" value="semua">
                                                    <label for="">I - Jenis Pelanggan</label>
                                                    <input type="radio" name="filter" id="semuakd" value="semua">
                                                    <label for="">J - Sub Zona</label>
                                                    <input type="radio" name="filter" id="semuakd" value="semua">
                                                    <label for="">K - No Bundel</label>
                                                    <input type="radio" name="filter" id="semuakd" value="semua">
                                                    <label for="">L - Retribusi</label>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>
                          
                                <div class="col-md-12">
                                <form action="">
                                    <div class="form-group row mt-2">
                                        <label for="kode" class="col-md-2 col-form-label">No Pelanggan </label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="kode" name="kode" onkeyup="valueing()">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <label for="kode" class="col-md-2 col-form-label"> Nama </label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="kode" name="kode" onkeyup="valueing()">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <label for="kode" class="col-md-2 col-form-label"> Alamat </label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="kode" name="kode" onkeyup="valueing()">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <label for="kode" class="col-md-2 col-form-label"> Jenis Pelanggan </label>
                                        <div class="col-md-1">
                                            <input type="text" class="form-control" id="kode" name="kode" onkeyup="valueing()">
                                        </div>
                                        <label for="kode" class=" col-form-label"> Sub Zona</label>
                                        <div class="col-md-1">
                                            <input type="text" class="form-control" id="kode" name="kode" onkeyup="valueing()">
                                        </div>
                                        <label for="kode" class=" col-form-label"> No Bundel </label>
                                        <div class="col-md-1">
                                            <input type="text" class="form-control" id="kode" name="kode" onkeyup="valueing()">
                                        </div>
                                        <label for="kode" class=" col-form-label"> Rp Retribusi </label>
                                        <div class="col-md-1">
                                            <input type="text" class="form-control" id="kode" name="kode" onkeyup="valueing()">
                                        </div>
                                        <div class="col-md-2">
                                           
                            <button type="button" class="btn btn-danger btn-sm float-right" data-toggle="modal" data-target="#pelanggan"><i class=""></i> Import</button>
                                       <br>

                        </div>
                                        
                                    
                        </div>
                        <div class="form-group row mt-2">
                            <label for="kode" class="col-md-2 col-form-label"> Data Baru </label>
                            <div class="col-md-1">
                                <input type="text" class="form-control" id="kode" name="kode" onkeyup="valueing()">
                            </div>
                            <label for="kode" class=" col-form-label"> Sub Zona</label>
                            <div class="col-md-1">
                                <input type="text" class="form-control" id="kode" name="kode" onkeyup="valueing()">
                            </div>
                            <label for="kode" class=" col-form-label"> No Bundel </label>
                            <div class="col-md-1">
                                <input type="text" class="form-control" id="kode" name="kode" onkeyup="valueing()">
                            </div>
                            <label for="kode" class=" col-form-label"> Rp Retribusi </label>
                            <div class="col-md-1">
                                <select class="form-control" id="wilayah" onkeyup="valueing()">

                                    <option value="wilayah T"> Wilayah T </option>
                                    <option value="wilayah B"> Wilayah B </option>

                                </select>
                            </div>
                            <div class="col-md-1">
                                           
                                <button type="submit" class="btn btn-danger btn-sm float-right" data-toggle="modal" data-target="#pelanggan"><i class=""></i> Tambah</button>
                                           <br>
    
                            </div>
                                            
                        </div>
                        <div class="form-group row mt-2 ">
                            <label for="tombol" class="col-md-6 col-form-label"></label>
                            <div class="col-md-5">
                                <button class="btn btn-success btn-sm" type="submit"><i
                                        class="far fa-save"></i> Simpan</button>
                                <button type="submit" class="btn btn-danger btn-sm"><i
                                        class="fas fa-undo"></i> Reset</button>
                            </div>
                        </div>
                                    
                                </form>
                                
                                </div>
                            
                        </div>
                          
                                    <table id="table" class="table table-bordered table-responsive-md table-condensed">
                                    <thead>
                                        <tr>
                                            <th>No Pelanggan</th>
                                            <th>Zona</th>
                                            <th>Jenis Pelanggan</th>
                                            <th>No Bundel</th>
                                            <th>Nama</th>
                                            <th>Alamat Pemohon</th>
                                            <th>Zona Baru</th>
                                            <th>Jns Pelanggan Baru</th>
                                            <th>No Bundel Baru</th>
                                            <th>KDRET Lama</th>
                                            <th>RPRET Lama</th>
                                            <th>KDRET Baru</th>
                                            <th>RPRET Baru</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    

                                    </tbody>
                                </table>
                                <div class="form-group row mt-2">
                                    <label for="kode" class="col-md-2 col-form-label">Status Perubahan Tarif</label>
                                    <div class="col-md-3">
                                        <select class="form-control" id="wilayah" onkeyup="valueing()">

                                            <option value="wilayah T"> Wilayah T </option>
                                            <option value="wilayah B"> Wilayah B </option>

                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="form-group row mt-2">
                                    <label for="kode" class="col-md-2 col-form-label">Dasar </label>
                                    <div class="col-md-3">
                                        <textarea class="form-control" id="keterangan" onkeyup="valueing()" name="keterangan"></textarea>
                                    </div>
                                    
                                </div>
                                <div class="form-group row mt-2">
                                    <label for="kode" class="col-md-2 col-form-label">Terhitung Mulai</label>
                                        <div class="col-md-2">
                                        <input type="date" class="form-control" id="kode" name="kode" onkeyup="valueing()">
                                    </div>
                                    <label for="kode" class="col-md-1 col-form-label">Bln Terbit</label>
                                        <div class="col-md-2">
                                        <input type="date" class="form-control" id="kode" name="kode" onkeyup="valueing()">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kode" class="col-md-2 col-form-label">Tgl Kasi </label>
                                        <div class="col-md-2">
                                        <input type="date" class="form-control" id="kode" name="kode" onkeyup="valueing()">
                                    </div>
                                    <label for="kode" class="col-md-1 col-form-label">Tgl Kabag </label>
                                        <div class="col-md-2">
                                        <input type="date" class="form-control" id="kode" name="kode" onkeyup="valueing()">
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
                "scrollX": true,
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
