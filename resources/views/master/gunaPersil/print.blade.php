@extends('layout.app')

@push('css')
    <link href="http://fonts.cdnfonts.com/css/dot-matrix" rel="stylesheet">
    <style>
        .priview {
            font-family: 'Dot Matrix', sans-serif;
        }

        table thead tr {
            border-bottom: 3px dotted rgb(102, 102, 102);
            border-top: 3px dotted rgb(102, 102, 102);
        }
    </style>
@endpush

@section('title', 'Print Guna Persil')

@section('namaHal', 'Master')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Guna Persil</li>
        <li class="breadcrumb-item active">Print Guna Persil</li>
    </ol>
    <br>
    <br>
    <a href="" class="btn btn-sm btn-success float-right"><i class="fas fa-download"></i> Download</a>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Filter Guna Pensil</h3>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="radio" name="filter" id="semuakd" value="semua">
                                        <label for="">Semua Kode</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input type="radio" name="filter" id="kode" value="kode">
                                                <label for="">Kode</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3" id="startEnd">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="start" id="start">
                                        </div>
                                    </div>
                                    <span class="font-weight-bold mt-1" style="font-size: 15px;" id="startEnd">S/D</span>
                                    <div class="col-md-3 col-sm-3" id="startEnd">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="end" id="end">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-sm">Preview</button>
                                <button class="btn btn-danger btn-sm">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Guna Persil</h3>
                        </div>
                        <div class="card-body priview">
                            <p> Pemerintah Kota <br>
                                Surabaya <br>
                                PERUSAHAAN DAERAH AIR <br>
                            </p>
                            <div class="mx-auto mb-3" style="width: 250px;">
                                <span>Table Master Guna Pensil</span> <br>
                            </div>
                            <table class="table">
                                <thead>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script type="text/javascript">
        const box = document.getElementById('startEnd');

        function clickRadio() {
            if (document.getElementById('semuakd').checked) {
                box.style.display = "none"
            } else {
                box.style.display = "block"
            }
        }

        const radioButtons = document.querySelectorAll('input[name="filter"]');
        radioButtons.forEach(radio => {
            radio.addEventListener('click', clickRadio)
        });
    </script>
@endpush
