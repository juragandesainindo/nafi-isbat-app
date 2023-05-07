<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Jamaah</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-3">
                            <label for="nama">Nama</label>
                        </div>
                        <div class="col-9">
                            <input type="text" id="nama" class="form-control" placeholder="nama" autofocus>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-3">
                            <label for="jk">Jenis Kelamin</label>
                        </div>
                        <div class="col-9">
                            <input type="radio" name="jk" value="L" id="laki_laki" {{ $jamaah->jk == 'L'
                            ? 'checked'
                            : '' }}>
                            <label for="laki_laki">Laki-Laki</label>
                            &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="jk" value="P" id="perempuan" {{ $jamaah->jk == 'P'
                            ? 'checked'
                            : '' }}>
                            <label for="perempuan">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-3">
                            <label for="alamat">Alamat</label>
                        </div>
                        <div class="col-9">
                            <input type="text" id="alamat" class="form-control" placeholder="alamat" autofocus>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-3">
                            <label for="tender">Tender</label>
                        </div>
                        <div class="col-9">
                            <input type="text" id="tender" class="form-control" placeholder="tender" autofocus>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>