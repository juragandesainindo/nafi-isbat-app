<div wire:ignore.self class="modal fade" id="edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Jamaah</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent='update()'>
                <div class="modal-body">
                    <input type="hidden" wire:model='jamaahId'>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="nama">Nama <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-9">
                                <input type="text" wire:model='nama' id="nama"
                                    class="form-control @error('nama') is-invalid @enderror" placeholder="nama">
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="jk">Jenis Kelamin</label>
                            </div>
                            <div class="col-9">
                                <select wire:model='jk' class="form-control @error('jk') is-invalid @enderror">
                                    <option value="">-- Pilih jenis kelamin --</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                @error('jk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                {{-- <input type="radio" name="jk" value="Laki-laki" id="laki_laki" checked>
                                <label for="laki_laki"><span class="font-weight-normal">Laki-Laki</span></label>
                                &nbsp;&nbsp;&nbsp;
                                <input type="radio" name="jk" value="Perempuan" id="perempuan">
                                <label for="perempuan"><span class="font-weight-normal">Perempuan</span></label> --}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="alamat">Alamat</label>
                            </div>
                            <div class="col-9">
                                <input type="text" wire:model='alamat' id="alamat"
                                    class="form-control @error('alamat') is-invalid @enderror" placeholder="alamat">
                                @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="tender">Tender</label>
                            </div>
                            <div class="col-9">
                                <input type="text" wire:model='tender' id="tender currency-field" data-type="currency"
                                    class="form-control @error('tender') is-invalid @enderror" placeholder="tender">
                                @error('tender')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary">
                        <i class="fas fa-save"></i>&nbsp;
                        Update
                    </button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>