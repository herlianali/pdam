@extends('layout.app')

@section('title', 'Monitoring Pelanggan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Monitoring Pelanggan')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Monitoring Pelanggan</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Monitoring Pelanggan</h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-9">
                                    <form class="form-horizontal">
                                        <div class="form-group row mt-2">
                                            <label for="wilayah" class="col-md-3 col-form-label"> Wilayah </label>
                                            <div class="col-md-7">
                                                <select class="form-control" id="wilayah" onkeyup="valueing()">

                                                    <option value="wilayah T"> Wilayah T </option>
                                                    <option value="wilayah B"> Wilayah B </option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="status" class="col-md-3 col-form-label"> Status </label>
                                            <div class="col-md-7">
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="Buka" name="buka">
                                                    <label class="form-check-label">Buka</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="tutup_dinas" name="tutup_dinas">
                                                    <label class="form-check-label">Telah Tutup Dinas</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
                            <h3 class="card-title">Monitoring Pelanggan</h3>
                        </div>
                        <div class="card-body">

                            <div class="row mb-3">

                                <div class="col-md-12">
                                    <form class="form-horizontal" method="POST"
                                        action="/master/monitoringPelanggan/filter">
                                        @csrf
                                        <div class="form-group row ">
                                            <div class="col-md-1"></div>
                                            &nbsp; <input type="checkbox" id="cekNama" value="true" name="cekNama">
                                            &nbsp;
                                            <label for="nama" class="col-form-label"> Nama </label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id="nama" name="nama">
                                            </div>
                                        </div>

                                        <div class="form-group row ">
                                            <div class="col-md-1"></div>
                                            &nbsp; <input type="checkbox" id="cekAlamat" value="true" name="cekAlamat">
                                            &nbsp;
                                            <label for="alamat" class="col-form-label"> Alamat </label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="jalan" name="jalan"
                                                    placeholder="Jalan">
                                            </div>

                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="gang" name="gang"
                                                    placeholder="Gang">
                                            </div>

                                            <div class="col-md-1">
                                                <input type="text" class="form-control" id="nomor" name="nomor"
                                                    placeholder="Nomor">
                                            </div>
                                            <label for="notambahan" class="col-form-label"> No Tambahan</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="noTambahan"
                                                    name="no_tambahan">
                                            </div>
                                            <button type="submit" class="btn btn-success float-right" id="search"><i
                                                    class=" fa-filter"></i>Filter</button>
                                        </div>
                                        &nbsp;

                                 
                                    &nbsp;
                                    <br>
                                        <table id="table"
                                            class="table table-bordered table-responsive-md table-condensed"
                                            style="width: 100%">
                                            <thead>

                                                <tr>
                                                    <th>No Pelanggan</th>
                                                    <th>Nama</th>
                                                    <th>Jalan</th>
                                                    <th>Gang</th>
                                                    <th>Nomor</th>
                                                    <th>Nomor Tambahan</th>
                                                    <th>KD Tarif</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($filter as $mPelanggan)
                                                    <tr>
                                                        
                                                        <td>{{ $mPelanggan->no_pelanggan }}</td>
                                                        <td>{{ $mPelanggan->nama }}</td>
                                                        <td>{{ $mPelanggan->jalan }}</td>
                                                        <td>{{ $mPelanggan->gang }}</td>
                                                        <td>{{ $mPelanggan->nomor }}</td>
                                                        <td>{{ $mPelanggan->no_tambahan }}</td>
                                                        <td>{{ $mPelanggan->KD_Tarif }}</td>

                                                        <td>
                                                            <button type="submit"
                                                                    class="btn btn-xs btn-danger hapus"
                                                                    data-id="{{ $mPelanggan->no_plg }}">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                    Hapus
                                                            </button>
                                                            {{-- <button type="button"
                                                                    class="btn btn-xs btn-success edit"
                                                                    data-id="{{ $jenisPekerjaan->jns_pekerjaan }}"
                                                                    data-toggle="modal"
                                                                    data-target="#form">
                                                                    <i class="fas fa-edit"></i>
                                                                    Edit
                                                            </button> --}}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>
    @include('master.monitoringPelanggan.edit')
    @include('master.monitoringPelanggan.detail')
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
                    "sSearch": "Cari Pelanggan : "
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

        
        $(document).on('click', '.hapus', function(e) {
            e.preventDefault();
             //console.log();
            let no_plg = $(this).data('id');
            let token = "{{ csrf_token() }}";
            swal.fire({
                title: "Apakah Anda Yakin ?",
                icon: 'warning',
                text: "Anda Tidak Akan Bisa Mengembalikan Data Ini",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Iya, Hapus!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: `{{ url('master/jenisPekerjaan') }}/`+no_plg,
                        data: {
                                _token: token
                            },
                            success: function(resp) {
                                swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                                location.reload();
                            }
                    });
                }
            });
        });



        // Kalo pake API
        // function filter() {
        //     const payload = {
        //         nama: null,
        //         alamat: {
        //             jalan: null,
        //             gang: null,
        //             nomor: null,
        //             no_tambahan: null
        //         }
        //     }
        //     if (document.getElementById('cekNama').checked === true) {
        //         payload.nama = document.getElementById('nama').value
        //     }

        //     if (document.getElementById('cekAlamat').checked === true) {
        //         payload.alamat.jalan = document.getElementById('jalan').value
        //         payload.alamat.gang = document.getElementById('gang').value
        //         payload.alamat.nomor = document.getElementById('nomor').value
        //         payload.alamat.no_tambahan = document.getElementById('noTambahan').value
        //     }

        //     const token = "{{ csrf_token() }}"
        //     const result = JSON.stringify({
        //         payload
        //     })
        //     $.ajax({
        //         type: 'POST',
        //         url: '/master/monitoringPelanggan/filter',
        //         data: {
        //             _token: token,
        //             result
        //         },
        //         success: function(resp) {
        //             if (resp.success) {
        //                 console.log(resp.data)
        //             }
        //         },
        //         error: function(err) {
        //             console.log(err)
        //         }
        //     })
        // }

       
    </script>
@endpush
