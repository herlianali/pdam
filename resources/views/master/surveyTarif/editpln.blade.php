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
                        </div>
                        @include('master.surveyTarif.pln')
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

        $(document).on('click', '#cari', function(e) {
            e.preventDefault();
            // let no_plg = $('#no_plg').val();
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
        })

        $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            // let no_plg = $('#no_plg').val()
            $.ajax({
                type: "GET",
                url: `{{ url('master/') }}/` + no_plg,
                data: {
                    id: no_plg,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    $('#form-edit').attr('action', "{{ url('master/') }}/" + no_plg)
                    $('#nama_1').val(response.nama)
                    $('#alamat_1').val(response.alamat)
                    $('#jalan_1').val(response.jalan)
                    $('#pln_1').val(response.jalan)
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
            document.getElementById('nama').value = ''
            document.getElementById('alamat').value = ''
            document.getElementById('amper').value = ''
            document.getElementById('kwh').value = ''
            document.getElementById('jalan').value = ''
        }
        document.getElementById("clear").addEventListener("click", clear);
    </script>
@endpush
