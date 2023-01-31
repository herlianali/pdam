<div class="modal fade" id="filter" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter Survey Tarif</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form class="form-horizontal" action="{{ route('printsurveyTarif') }}" method="POST">
                @csrf
                    <div class="form-group row mt-2">
                        <label for="subzona" class="col-md-3 col-form-label">Sub Zona </label>
                        <div class="col-md-4">
                        <select class="form-control" onkeyup="valueing()" name="zonas">
                            @foreach ($zona as $zona)
                                <option value="{{ $zona->zona }}">{{ $zona->zona }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="bundel" class="col-md-3 col-form-label">Bundel</label>
                        <div class="col-md-4">
                        <select class="form-control" onkeyup="valueing()" name="bundel">
                                <option value="2">02</option>
                                <option value="4">04</option>
                                <option value="8">08</option>
                                <option value="0"></option>
                                <option value="6">06</option>
                                <option value="3">03</option>
                                <option value="5">05</option>
                                <option value="7">07</option>
                                <option value="9">09</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="jenis_survey" class="col-md-3 col-form-label">Jenis Survey</label>
                        <div class="col-md-3">
                            <input type="checkbox">
                            <label for="plm" class="col-form-label">PLN</label>
                            <br>
                            <input type="checkbox">
                            <label for="jalan" class=" col-form-label">Jalan</label>
                            <br>
                            <input type="checkbox">
                            <label for="njop" class=" col-form-label">NJOP</label>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="jns_percetakan" class="col-md-3 col-form-label">Jenis Percetakan</label>
                        <div class="col-md-3">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="semua" name="jns_percetakan">
                                <label class="form-check-label">Semua</label>
                                <br>
                                <input type="radio" class="form-check-input" id="data_kosong" name="jns_percetakan">
                                <label class="form-check-label">Data Kosong</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class=" btn-info btn-sm float-right">Preview</button>
                    <button class=" btn-danger btn-sm float-right">Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>


@push('js')
    <script type="text/javascript">
    $(document).ready(function(){
        $('input[type="radio"]').on('click', function(){
            if($(this).attr("value") == "semua") {
                $('#start').prop('disabled', true)
                $('#end').prop('disabled', true)
                console.log("hidup");
            }
            if($(this).attr("value") == "kode"){
                console.log("mati");
                $('#start').prop('disabled',false)
                $('#end').prop('disabled',false)
            }
        })
        $('input[type="radio"]').trigger('click');
        })
    </script>
@endpush
