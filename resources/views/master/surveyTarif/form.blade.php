
<div class="modal fade" id="edit" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Survey Tarif</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
            <div class="row mb-2">
                <div class="col-md-1"></div>
                <div class="col-md-12">
                    <form class="form-horizontal">
                    
                        <div class="form-group row mt-2">
                            <label for="blnrek">Bulan Rekening </label>
                            <div class="col-md-5">
                                <input type="date" class="form-control" id="blnrekening" name="blnrekening">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="subzona" >Sub Zona</label>
                            <div class="col-md-5">
                            <input type="text" class="form-control" id="subzona" name="subzona" >
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="jenispelanggan" >Jenis Pelanggan</label>
                            <div class="col-md-5">
                            <input type="text" class="form-control" id="jenispelanggan" name="jenispelanggan">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="nobundel" >No Bundel</label>
                            <div class="col-md-5">
                            <input type="text" class="form-control" id="nobundel" name=nobundel">
                            </div>
                        </div>

                        <br>
                        <br>

                        <div class="form-group">
                            <label for="nopelanggan" class="col-md-3 col-form-label">No Pelanggan</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="nopelanggan" name="nopelanggan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-md-3 col-form-label">Nama</label>
                            <div class="col-md-6">
                            <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="alamat" class="col-md-3 col-form-label">Alamat</label>
                            <div class="col-md-6">
                            <textarea class="form-control" id="alamat" name="alamat"></textarea>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="nomor" class="col-md-3 col-form-label">Nomor PA</label>
                            <div class="col-md-6">
                            <input type="text" class="form-control" id="noPA" name="noPA">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lebarjln" class="col-md-3 col-form-label">Lebar Jalan</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="lebarjln" name="lebarjln">
                            </div>
                            <label for="M" class="col-md-3 col-form-label">M</label>
                            <label for="tariflama" class="col-md-2 col-form-label">Tarif Lama</label>   
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="tariflama" name="tariflama">
                            </div>  
                                             
                        </div>
                        <div class="form-group">
                            <label for="listrik" class="col-md-3 col-form-label">Listrik</label>
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="listrik"  name="listrik">
                            </div>
                            <label for="amp" class="col-md-3 col-form-label">Amp</label>
                            <label for="kwh" class="col-md-2 col-form-label">Kwh</label>
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="kwh" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="njop" class="col-md-3 col-form-label">NJOP</label>
                            <div class="col-md-3">
                            <input type="text" class="form-control" id="njop" name="njop" >
                            </div>
                            <label for="juta" class="col-md-3 col-form-label">Juta</label>
                        </div>

                        <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i> Simpan</button>
                        </form>
            </div>
        </div>
    </div>
</div>
