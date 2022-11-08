@extends('layout.app')

@section('title', 'Data Entri Pegawai')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Petugas Entry Pengaduan</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Petugas Customer Servis</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <form class="form-horizontal" action="{{ route('petugasPengaduan.store') }}" method="POST" id="myForm">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="kdptg" class="col-md-2 col-form-label">Kode Petugas</label>
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">LT</span>
                                                    <input type="text" class="form-control" id="kd_ptgcs" name="kd_ptgcs" onkeyup="valueing()" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-default btn-mt-2" type="button" data-toggle="modal"data-target="#pegawai"><i class="fas fa-search fa-fw"></i> Pilih Pegawai</button>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nip" class="col-md-2 col-form-label">NIP</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="nip" name="nip" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama" class="col-md-2 col-form-label">Nama</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="nama" name="nama" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <input type="hidden" name="aktif" value="1">
                                        <div class="form-group row mt-2 ">
                                            <label for="" class="col-md-7 col-form-label"></label>
                                            <div class="col-md-5">
                                                <button class="btn btn-success btn-sm" type="submit"><i
                                                        class="far fa-save"></i> Simpan</button>
                                                <button type="reset" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-undo"></i> Reset</button>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                    </form>
                                </div>

                            </div>
                            <table id="example2" class="table table-bordered table-responsive-md table-condensed"
                                style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Petugas</th>
                                        <th>Nama</th>
                                        <th>Nip</th>
                                        <th>Status</th>
                                        <th>ISCS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pPengaduan as $ptsPengaduan)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $ptsPengaduan->kd_ptgcs }}</td>
                                            <td>{{ $ptsPengaduan->nama }}</td>
                                            <td>{{ $ptsPengaduan->nip }}</td>
                                            <td>{{ $ptsPengaduan->aktif }}</td>
                                            <td>{{ $ptsPengaduan->iscs }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @include('master.petugasPengaduan.tablePegawai')

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
            $('#example1').DataTable({
                "paging": true,
                "lengthChange": false,
                "oLanguage": {
                    "sSearch": "NIP/NAMA : "
                },
                "bInfo" : false,
                "ordering": true,
                "autoWidth": false,
                "responsive": true,
                "pageLength": 5
            })
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
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

        $(document).on('click', '#pilih', function(e) {
            e.preventDefault();
            let nip = $(this).data('id');
            $.ajax({
                type: "GET",
                url: `{{ url('api/dip') }}/`+nip,
                data: {
                    id: nip,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(res) {
                    $('#nip').val(res.nip)
                    $('#nama').val(res.nama)
                    $("#pegawai").modal('hide');
                    swal.close();
                }
            })
        })

        function valueing() {
            if (document.getElementById('kdptg').value === "" || document.getElementById('nip').value === "" || document
                .getElementById('nama').value === "") {
                document.getElementById('batal').disabled = true
                document.getElementById('simpan').disabled = true
            } else {
                document.getElementById('batal').disabled = false
                document.getElementById('simpan').disabled = false
            }
        }
        jQuery(document).ready(function($){
            jQuery('#btn-add').click(function () {
                jQuery('#btn-save').val("add")
                jQuery('#modalFormData').trigger("reset")
                jQuery('#linkEditorModal').modal('show')
            });


        })
    </script>
@endpush
