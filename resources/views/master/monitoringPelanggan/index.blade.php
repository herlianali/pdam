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

                                    </form>
                                    &nbsp;
                                    <br>

                                    <form class="form-horizontal"  method="POST">
                                        @csrf
                                        <table id="table"
                                            class="table table-bordered table-responsive-md table-condensed"
                                            style="width: 100%">
                                            <thead>

                                                <tr>
                                                    <th>ID</th>
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

                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                {{-- @foreach ($monPelanggan as $mPelanggan)
                                                    <tr>
                                                        <td>{{ ++$i }}</td>
                                                        <td>{{ $mPelanggan->no_pelanggan }}</td>
                                                        <td>{{ $mPelanggan->nama }}</td>
                                                        <td>{{ $mPelanggan->jalan }}</td>
                                                        <td>{{ $mPelanggan->gang }}</td>
                                                        <td>{{ $mPelanggan->nomor }}</td>
                                                        <td>{{ $mPelanggan->no_tambahan }}</td>
                                                        <td>{{ $mPelanggan->KD_Tarif }}</td>

                                                        <td>
                                                            <button type="button" class="btn btn-xs btn-info "
                                                                data-toggle="modal" data-target="#detail"><i
                                                                    class="fas fa-eye"></i> Info</button>
                                                            <button type="button" class="btn btn-xs btn-danger "
                                                                onclick="deletemonitoringPelanggan({{ $mPelanggan->id }})"><i
                                                                    class="fas fa-trash-alt"></i> Hapus</button>
                                                            <button type="button" class="btn btn-xs btn-success "
                                                                data-toggle="modal" data-target="#edit"><i
                                                                    class="fas fa-edit"></i> Edit</button>
                                                        </td>
                                                    </tr>
                                                @endforeach --}}
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

        

        $(document).on('click', '.filter', function(e) {
            e.preventDefault();
           // console.log('respon');
            let nama = $(this).data('id');
            let jalan = $(this).data('id');
            let gang = $(this).data('id');
            let nomor = $(this).data('id');
            let notamb = $(this).data('id');
            $.ajax({
                type: "GET",
                url: `{{ url('master/monitoringPelanggan') }}/`+nama,
                data: {
                    id: nama,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    $('#form-edit').attr('action', "{{ url('master/kondisiTutupan') }}/"+kd_kondisi)
                    $('#kd_kondisi').val(response.kd_kondisi.trim()).change()
                    $('#keterangan').val(response.keterangan)
                    swal.close();
                }
            })
        })

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

        function deletemonitoringPelanggan(id) {
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
                    let _url = `/master/deletemonitoringPelanggan/${id}`
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
                                swal.fire("Gagal!", "Terjadi Kesalahan.", "error");
                            }
                        },
                        error: function(resp) {
                            swal.fire("Gagal!", "Terjadi Kesalahan.", "error")
                        }
                    })
                    // } else {
                    //     e.dismiss;
                }
            })
            // }, function(dismiss) {
            //     return false;
            // });
        }
    </script>
@endpush
