<div class="modal fade" id="filter" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter Petugas Kontrol</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('printpetugasKontrol') }}" class="form-horizontal" method="POST">
                @csrf
                    <div class="form-group row mt-2">
                        <label for="wilayah" class="col-md-3 col-form-label"> Wilayah </label>
                        <div class="col-md-7">
                            <select class="form-control" id="wilayah" name="wilayah" onkeyup="valueing()">

                                <option value="semua"> Semua Wilayah </option>
                                <option value="timur"> Langganan Timur</option>
                                <option value="barat"> Langganan Barat</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-success btn-sm" type="submit">Preview</button>
                    <button type="cancel" class="btn btn-danger btn-sm"> Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>
