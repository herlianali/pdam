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
        <li class="breadcrumb-item active"> Laporan Rekapitulasi Naik Turun</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Laporan Rekapitulasi Naik Turun</h3>
                            <a href="{{ route('preview') }}"class="btn btn-xs btn-success float-right"><i class="fas fa-print"></i> Cetak</a>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-8">
                                    <form class="form-horizontal">
                                        <div class="form-group row mt-2 ">
                                            <label for="periode" class="col-md-2 col-form-label">Periode
                                            </label>
                                            <div class="col-md-3">
                                                <input type="date" class="form-control" name="periode"id="periode"onkeyup="valueing()">
                                            </div>
                                            <label for="sd" class="col-form-label">S.D </label>
                                            <div class="col-md-3">
                                                <input type="date" class="form-control" name="periode1" id="periode1"onkeyup="valueing()">
                                            </div>
                                           
                                        </div>
                                        
                                        <div class="form-group row">
                                        <div class="col-md-2">
                                            <label class="col-form-label col-form-label-sm"></label>
                                        </div>
                                        <div class="card col-md-6">
                                            <div class="card-body">
                                                <div class="col-md-1">
                                                <label class="col-form-label col-form-label-sm" for="nama">Dasar</label>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="penerbitan" name="dasar" value="penerbitan">
                                                        <label class="form-check-label">Penerbitan</label>
                                                    </div>
                                                    &nbsp;
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="pengesahan" name="dasar" value="pengesahan">
                                                        <label class="form-check-label">Pengesahan</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                        <div class="form-group row">
                                            <label for="" class="col-md-2 col-form-label"></label>
                                            <div class="col-md-2">
                                                <div class="form-group row">
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="naik" name="level" value="N">
                                                        <label class="form-check-label">Naik</label>
                                                    </div>
                                                    &nbsp;
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="turun" name="level" value="R">
                                                        <label class="form-check-label">Turun</label>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="periode" class="col-md-2 col-form-label">
                                            </label>
                                            <button type="button" class="btn btn-success btn-sm float-right" id="search"></i>Filter</button>
                                           
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            
                            <table id="table" class="table table-bordered table-responsive-md table-condensed">
                                <thead>
                                    <tr>
                                        <th width="20%">Kode Tarif L </th>
                                        <th width="20%">Kode Tarif B</th>
                                        <th width="30%">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>

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
                    "sSearch": "Kode Tarif Lama/Baru : "
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

        function deletePanggilanDinas(id) {
            console.log(id)
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
                    let _url = `/master/deletePanggilanDinas/${id}`
                    console.log(_url)

                    $.ajax({
                        type: 'DELETE',
                        url: _url,
                        data: {
                            _token: token
                        },
                        success: function(resp) {
                            if (resp.success) {
                                swal.fire("Selesai!", resp.message, "success");
                                location.reload();
                            } else {
                                swal.fire("Gagal!", "Terjadi Anjayy.", "error");
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

        $(document).on('click', '.filter', function(e){
            e.preventDefault()
            let periode = $('#periode').is(':checked')
            let periode1 = $('#periode1').val()
            let nama_c = $('#nama_C').is(':checked')
            let nama = $('#nama').val()
            let no_pa_c = $('#no_pa_c').is(':checked')
            let no_pa = $('#no_pa').val()
            let alamat_c = $('#alamat_c').is(':checked')
            let jalan = $('#jalan').val()
            let gang = $('#gang').val()
            let no = $('#no').val()
            let no_tambahan = $('#no_tambahan').val()

            $.ajax({
                type: "POST",
                dataType: "JSON",
                url: `{{ url('pengaduan/cariPelanggan') }}`,
                data: {
                    _token: '{{ csrf_token() }}',
                    _method: "POST",
                    periode: periode,
                    periode1: periode1,
                    nama_c: nama_c,
                    nama: nama,
                    no_pa_c: no_pa_c,
                    no_pa: no_pa,
                    alamat_c: alamat_c,
                    jalan: jalan,
                    gang: gang,
                    no: no,
                    no_tambahan: no_tambahan,
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    $('').each(response, function(i, data) {
                        console.log(data.no_bonc)
                    })
                    swal.close();
                }
            })
        })
    </script>
@endpush