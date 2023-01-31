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
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row mt-2">
                                        <label for="wilayah" class="col-md-3 col-form-label"> Wilayah </label>
                                        <div class="col-md-7">
                                            <select class="form-control" id="wilayah" name="wilayah">
                                                <option value="T"> Wilayah T </option>
                                                <option value="B"> Wilayah B </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-md-3 col-form-label"> Status </label>
                                        <div class="col-md mt-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="status" name="status" value="B%">
                                                <label class="form-check-label">Buka</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="status" name="status" value="T%">
                                                <label class="form-check-label">Telah Tutup Dinas</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <div class="form-group form-check mt-2">
                                                <input type="checkbox" class="form-check-input" id="cekNama" name="cekNama">
                                                <label class="form-check-label" for="nama"> Nama </label>
                                            </div>
                                        </div>
<<<<<<< HEAD
                                        <div class="form-group row">
                                            <label for="status" class="col-md-3 col-form-label"> Status </label>
                                            <div class="col-md-7">
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="status" name="buka">
                                                    <label class="form-check-label">Buka</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="status" name="tutup_dinas">
                                                    <label class="form-check-label">Telah Tutup Dinas</label>
                                                </div>
=======
                                        <div class="col-md-10 ml-n5">
                                            <input type="text" class="form-control" id="nama" name="nama" oninput="this.value = this.value.toUpperCase()">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <div class="form-group form-check mt-2">
                                                <input type="checkbox" class="form-check-input" id="cekAlamat" name="cekAlamat">
                                                <label class="form-check-label" for="alamat"> Alamat </label>
>>>>>>> 9c8b61fdb2292dbf93f27ce238b92f323d69a067
                                            </div>
                                        </div>
                                        <div class="col-md-4 ml-n5">
                                            <input type="text" class="form-control" id="jalan" name="jalan" oninput="this.value = this.value.toUpperCase()" placeholder="jalan">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control" id="gang" name="gang" oninput="this.value = this.value.toUpperCase()" placeholder="gang">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="number" class="form-control" id="nomor" name="nomor" placeholder="nomor">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="number" class="form-control" id="no_tambahan" name="no_tambahan" placeholder="no_tambahan">
                                        </div>
                                    </div>
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
                                <div class="col-md-12 row">
                                    <div class="col-md-2"> <label for=""> No Pelanggan </label></div>
                                    <div class="col-md-3 ml-n5"><input type="text" class="form-control" name="no_plg" id="no_plg"></div>
                                    <div class="col-md-2"> <button type="button" class="btn btn-primary" name="cari_plg" id="cari_plg"> <i class="fas fa-search"></i> Cari Pelanggan </button> </div>
                                    <div class="col-md-5 ml-5"> <button type="button" class="btn btn-success float-right" id="search"> <i class="fas fa-filter fa-xs"></i> Filter </button> </div>
                                </div>
                                <div class="col-md-12">
<<<<<<< HEAD
                                    <form class="form-horizontal" id="filter">
                                    <div class="form-group row">
                                        <div class="col-md-1">
                                            <label class="col-form-label col-form-label-sm"></label>
                                        </div>
                                        <div class="card col-md-7">
                                            <div class="card-body">
                                                <div class="col-md-1">
                                                <label class="col-form-label col-form-label-sm" for="nama">Filter</label>
                                                </div>
                                                <div class="form-group row ">
                                                    <div class="col-md-1"></div>
                                                    &nbsp; <input type="checkbox" id="cekNama" value="true" name="cekNama">
                                                    &nbsp;
                                                    <label for="nama" class="col-form-label"> Nama </label>
                                                    <div class="col-md-5">
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

                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" id="nomor" name="nomor"
                                                            placeholder="Nomor">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" id="noTambahan"
                                                            name="no_tambahan" placeholder="No Tambahan">
                                                    </div>
                                                    <button type="submit" class="btn btn-success float-right" id="search"><i
                                                    class="fa fa-filter"></i>Filter</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="form-group row ">
                                        <div class="col-md-1"></div>
                                            <label for="no_plg" class="col-form-label"> No Pelanggan</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="no_plg"
                                                    name="no_plg">
                                            </div>
                                            <button class="btn btn-success float-right"><i
                                                    class="fa fa-search"></i>Cari Pelanggan</button>
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
                                            @if (count($data) > 0)
                                            @foreach ($data as $row)
                                                <tr>
                                                    <td>{{ $row->no_plg }}</td>
                                                    <td>{{ $row->nama }}</td>
                                                    <td>{{ $row->jalan }}</td>
                                                    <td>{{ $row->gang }}</td>
                                                    <td>{{ $row->nomor }}</td>
                                                    <td>{{ $row->notamb }}</td>
                                                    <td>{{ $row->kd_tarif }}</td>
                                                    <td>
                                                    <button type="button"
                                                        class="btn btn-xs btn-success detail"
                                                        data-id="{{ $row->no_plg }}"
                                                        data-toggle="modal"
                                                        data-target="#form">
                                                        <i class="fas fa-eye"></i>
                                                        Detail
                                                    </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @endif

                                                {{-- @foreach ($filter as $mPelanggan)
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
                                                        {{-- </td>
                                                    </tr>
                                                @endforeach --}}
                                            </tbody>
                                        </table>
                                    </form>
=======
                                    <br>
                                    <table class="table table-bordered table-responsive-md table-condensed" style="width: 100%">
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
                                        <tbody id="data">
                                            <tr id="no_data">
                                                <td colspan="8"><center>No Data</center></td>
                                            </tr>
                                        </tbody>
                                    </table>
>>>>>>> 9c8b61fdb2292dbf93f27ce238b92f323d69a067
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<<<<<<< HEAD
    @include('master.monitoringPelanggan.detail')
 
=======
    @include('master.monitoringPelanggan.edit')

>>>>>>> 9c8b61fdb2292dbf93f27ce238b92f323d69a067
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

       
        $(document).on('click', '.detail', function(e) {
            e.preventDefault();
            let no_plg = $(this).data('id')
            $.ajax({
                type: "GET",
                url: `{{ url('master/monitoringPelanggan') }}/`+no_plg,
                data: {
                    id: no_plg,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    $('#form-detail').attr('action', "{{ url('master/monitoringPelanggan') }}/"+no_plg)
                    $('#no_plg').val(response.no_plg)
                    $('#zona').val(response.zona)
                    swal.close();
                }
            })
        })

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

        $(document).on('click', '#cari_plg', function(e) {
            e.preventDefault()
            let no_plg = $('#no_plg').val();
            let table = $('#data');
            $.ajax({
                type: "POST",
                url: `{{ url('master/monitoringPelanggan/cari_plg') }}`,
                data: {
                    _token: '{{ csrf_token() }}',
                    _method: 'POST',
                    no_plg: no_plg,
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response){
                    $('#no_data').remove();
                    table.append('<tr><td>'+response.no_plg+'</td><td>'+response.nama+'</td></td><td>'+response.jalan+'</td></td><td>'+response.gang+'</td></td><td>'+response.nomor+'</td></td><td>'+response.notamb+'</td></td><td>'+response.kd_tarif+'</td></td><td><button type="button" class="btn btn-xs btn-warning detail" data-toggle="modal" data-target="#form" data-id='+response.no_plg+'> <i class="fas fa-eye"></i> Detail </button></td></tr>');
                    swal.close();
                }
            })
        })


        $(document).on('click', '.detail', function(e) {
            e.preventDefault();
            let no_plg = $(this).attr('data-id');
            $.ajax({
                type: "GET",
                url: `{{ url('master/monitoringPelanggan') }}/`+no_plg,
                data: {
                    id: no_plg,
                    _token: '{{ csrf_token() }}'
                },
                // beforeSend: function() {
                //     showLoading()
                // },
                success: function(response){
                    console.log(response);
                    $('#no_pelanggan').val(response.no_plg);
                    $('#name').val(response.nama);
                    $('#jln').val(response.jalan);
                    $('#gg').val(response.gang);
                    $('#no').val(response.nomor);
                    $('#no_tmbhn').val(response.notmb);
                    $('#kd_tf').val(response.kd_tarif);
                    swal.close();
                }
            })
        });

<<<<<<< HEAD
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

=======
        $(document).on('click', '#search', function(e) {
            e.preventDefault()
            let wilayah    = $('#wilayah').val()
            let status     = $('#status:checked').val()
            let cname      = $('#cekNama').is(":checked")
            let nama       = $('#nama').val()
            let cekAlamat  = $('#cekAlamat').is(":checked")
            let jalan      = $('#jalan').val()
            let gang       = $('#gang').val()
            let nomor      = $('#nomor').val()
            let noTambahan = $('#no_tambahan').val()
            let table      = $('#data');
            $.ajax({
                type: "POST",
                url: `{{ url('master/monitoringPelanggan/filter') }}`,
                data: {
                    _token: '{{ csrf_token() }}',
                    _method: 'POST',
                    wilayah: wilayah,
                    status: status,
                    cname: cname,
                    nama: nama,
                    cekAlamat: cekAlamat,
                    jalan: jalan,
                    gang: gang,
                    nomor: nomor,
                    noTambahan: noTambahan,
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response){
                    $('#no_data').remove();
                    $.each(response, function(i, v){
                        table.append('<tr><td>'+v.no_plg+'</td><td>'+v.nama+'</td></td><td>'+v.jalan+'</td></td><td>'+v.gang+'</td></td><td>'+v.nomor+'</td></td><td>'+v.notamb+'</td></td><td>'+v.kd_tarif+'</td></td><td><button type="button" class="btn btn-xs btn-warning detail" data-toggle="modal" data-target="#form" data-id='+v.no_plg+'> <i class="fas fa-eye"></i> Detail </button></td></tr>');
                    })
                    swal.close();
                }
            })
        })
>>>>>>> 9c8b61fdb2292dbf93f27ce238b92f323d69a067

    </script>
@endpush
