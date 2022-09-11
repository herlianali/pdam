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
        <li class="breadcrumb-item active">Lebih Entri</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Table Lebih Entri</h3>
                            <a href="{{ route('surveyTarif') }}" class="btn btn-xs btn-success float-right"><i
                                    class="fas fa-backward"></i> Kembali</a>
                        </div>
                        <div class="card-body">
                            <div class="col-md-1"></div>
                            <div class="col-md-12">
                                <table id="table" class="table table-bordered table-responsive-md table-condensed">
                                    <thead>
                                        <tr>
                                            <th width="25%">No Pelanggan </th>
                                            <th width="25%">Kode Tarif</th>
                                            <th width="25%">No Bundel</th>
                                            <th width="25%">Zona</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-12">
                                <form class="form-horizontal">
                                    <div class="form-group row mt-2">
                                        <label for="lebihentri" class="col-form-label">Total Kelebihan Entri</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="lebihentri" id="lebihentri" onkeyup="valueing()">
                                        </div>
      
                                    </div>
                                </form>
                                <a href="{{ route('cetaklebihentri') }}" class="btn btn-xs btn-success float-right"><i
                                    class="fas fa-print"></i> Cetak</a>
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
