@extends('layout.app')
@section('title', 'Survey Tarif')

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
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Table Data Kosong</h3>
                            <a href="{{ route('surveyTarif') }}" class="btn btn-xs btn-success float-right"><i
                                    class="fas fa-backward"></i> Kembali</a>
                        </div>
                        <div class="card-body">
                            <div class="col-md-1"></div>
                            <div class="col-md-12">
                                <table id="table" class="table table-bordered table-responsive-md table-condensed">
                                    <thead>
                                        <tr>
                                            <th width="20%">Zona </th>
                                            <th width="20%">No Bundel</th>
                                            <th width="20%">No Pelanggan</th>
                                            <th width="20%">Listrik</th>
                                            <th width="20%">Jalan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-1"></div>
                            <form class="form-horizontal" action="" method="post">
                                @csrf
                                <div class="form-group row mt-2 ">
                                    <label for="total_data" class="col-md-2 col-form-label">Total Data Kosong </label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="tota_data" id="total_data"
                                            onkeyup="valueing()">
                                    </div>
                                </div>
                                <div class="form-group row mt-2 ">
                                    <label for="zonacetak" class="col-md-2 col-form-label">Zona yang diCetak </label>
                                    <div class="col-md-4">
                                        <select class="form-control" id="zonacetak" onkeyup="valueing()">

                                            <option value=""> </option>
                                            <option value=""> </option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-2 ">
                                    <label for="" class="col-md-7 col-form-label"></label>
                                    <div class="col-md-5">

                                        <a href="{{ route('cetakdk') }}" class="btn btn-xs btn-success float-right"><i
                                                class="fas fa-print"></i> Cetak</a>
                                    </div>
                                </div>
                            </form>
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
