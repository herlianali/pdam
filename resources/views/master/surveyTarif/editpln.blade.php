@extends('layout.app')
@section('title', 'Survey Tarif')


@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Survey Tarif</li>
    </ol>
@endsection


@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Survey Tarif</li>
        <li class="breadcrumb-item active">Data Kosong</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title"> Jalan PLN </h3>
                        </div>
                        <div class="card-body">
<<<<<<< HEAD
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <div class="form-group row mt-2">
                                        <label for="zona" class="col-md-2 col-form-label">Zona </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="zona" name="zona">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <label for="no_bundel" class="col-md-2 col-form-label">Bundel </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="no_bundel" name="no_bundel">
                                        </div>
                                        <button class="btn btn-info btn-mt-2" id="cari" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                        &nbsp;
                                    </div>
                                    <hr style="width: 100%">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="no_plg" class="col-md-2 col-form-label">No Pel</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="no_plg" name="no_plg"  value="" readonly>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="alamat" name="alamat" value=""></textarea>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="listrik" class="col-md-2 col-form-label">PLN</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="amper" name="amper" value="">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="kwh" name="kwh" value="">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="jalan" class="col-md-2 col-form-label">Jalan</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="jalan" name="jalan" value="">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8 text-right">
                                    <button class="btn btn-success edit btn-mt-2" id="edit" type="button">
                                        <i class="fa fa-edit"></i>
                                        Edit
                                    </button>
                                    <button class="btn btn-danger btn-mt-2" id="clear" type="cancel">
                                        <i class="fa fa-trash"></i>
                                        Bersihkan
                                    </button>
                                </div>
                            </div>
=======
                            <div class="form-group row mt-2">
                                <label for="nomor" class="col-md-2 col-form-label">Zona </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="zona" name="zona">
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="nomor" class="col-md-2 col-form-label">No Bundel </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="no_bundel" name="no_bundel">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="nama" class="col-md-2 col-form-label">Nama</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="nama" name="nama" readonly>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="alamat" name="alamat" readonly></textarea>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="nomor" class="col-md-2 col-form-label">PLN</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="amper" name="amper">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="kwh" name="kwh">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="nomor" class="col-md-2 col-form-label">Jalan</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="jalan" name="jalan">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8 text-right">
                                    <button class="btn btn-success btn-mt-2" id="edit">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </button>
                                    <button class="btn btn-danger btn-mt-2" id="clear">
                                        <i class="fa fa-trash"></i>
                                        Bersihkan
                                    </button>
                                </div>
                            </div>
>>>>>>> 9c8b61fdb2292dbf93f27ce238b92f323d69a067
                        </div>
                    </div>
                </div>
    </section>
@endsection

@push('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

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

        $('#no_bundel').keypress(function(e){
            var key = e.which
            if(key == 13){
                console.log("enter")
                $.ajax({
                type: "post",
                url: `{{ url('master/') }}/` + no_plg,
                data: {
                    id: no_plg,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    console.log('resp');
                    $('#nama').val(response.nama)
                    $('#alamat').val(response.alamat)
                    $('#jalan').val(response.jalan)
                    $('#pln').val(response.pln)
                    swal.close();
                }
            })
            }
        })

        $('#amper').keypress(function(e){
            var key = e.which
            if(key == 13){
                let amp = $(this).val()
                let kwh = $('#kwh').val()
                if (amp == '0' || amp == '') {
                    $('#kwh').prop('disabled', false)
                }else{
                    $('#kwh').prop('disabled', true)
                    if (amp > 20) {
                        $('#kwh').val("5000")
                    }else{
                        switch (amp) {
                            case "2":
                                $('#kwh').val("450")
                                break;
                            case "4":
                                $('#kwh').val("900")
                                break;
                            case "6":
                                $('#kwh').val("1300")
                                break;
                            case "10":
                                $('#kwh').val("2200")
                                break;
                            case "16":
                                $('#kwh').val("3500")
                                break;
                            case "20":
                                $('#kwh').val("4400")
                                break;
                            default:
                                alert("tidak ada data amper")
                                break;
                        }
                    }
                }
            }
        })

        $(document).on('click', '#cari', function(e) {
            e.preventDefault();
            let zona = $('#zona').val();
            let no_bundel = $('#no_bundel').val();
            $.ajax({
                type: "POST",
                dataType: "JSON",
                url: `{{ url('master/editpln') }}`,
                data: {
                    _token: '{{ csrf_token() }}',
                    _method: "POST",
                    zona: zona,
                    no_bundel: no_bundel
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    $('#no_plg').val(response.no_plg)
                    $('#alamat').val(response.alamat)
                    $('#listrik').val(response.listrik)
                    $('#jalan').val(response.jalan)
                    swal.close();
                },
            })
        })

        $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            let no_plg = $(this).data('id')
            let amper = $(this).data('amper')
            let jalan = $(this).data('jalan')
            $.ajax({
                type: "PATCH",
                url: `{{ url('master/editJalan') }}/` + no_plg,
                data: {
                    id: no_plg,
                    amper:amper,
                    jalan:jalan,
                    _token: '{{ csrf_token() }}',
                    _method: 'patch'
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    $('#no_plg').val(response.no_plg.trim()).change()
                    $('#amper').val(response.amper.trim()).change()
                    $('#jalan').val(response.jalan.trim()).change()
                    swal.close();
                }
            })
        })

        $('#amper').keypress(function(e){
            var key = e.which
            if(key == 13){
                let amp = $(this).val()
                let kwh = $('#kwh').val()
                if (amp == '0' || amp == '') {
                    $('#kwh').prop('disabled', false)
                }else{
                    $('#kwh').prop('disabled', true)
                    if (amp > 20) {
                        $('#kwh').val("5000")
                    }else{
                        switch (amp) {
                            case "2":
                                $('#kwh').val("450")
                                break;
                            case "4":
                                $('#kwh').val("900")
                                break;
                            case "6":
                                $('#kwh').val("1300")
                                break;
                            case "10":
                                $('#kwh').val("2200")
                                break;
                            case "16":
                                $('#kwh').val("3500")
                                break;
                            case "20":
                                $('#kwh').val("4400")
                                break;
                            default:
                                alert("Data Ampere Tersebut Tidak Ada")
                                break;
                        }
                    }
                }
            }
        })

        function clear() {
            document.getElementById('zona').value = ''
            document.getElementById('no_bundel').value = ''
<<<<<<< HEAD
            document.getElementById('no_plg').value = ''
=======
            document.getElementById('nama').value = ''
>>>>>>> 9c8b61fdb2292dbf93f27ce238b92f323d69a067
            document.getElementById('alamat').value = ''
            document.getElementById('amper').value = ''
            document.getElementById('kwh').value = ''
            document.getElementById('jalan').value = ''
        }
        document.getElementById("clear").addEventListener("click", clear);
    </script>
@endpush
