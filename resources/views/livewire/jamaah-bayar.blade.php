<div>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4>Bayar Nafi Isbat ({{ $jamaah->nama }})</h4>
                        <a href="{{ route('jamaah') }}" class="btn btn-outline-secondary mt-2 btn-sm">
                            <i class="fas fa-arrow-alt-circle-left"></i>&nbsp;&nbsp;
                            Kembali
                        </a>
                    </div>
                    <div class="col-sm-6">
                        @if (session('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    @if ($sisa != 0) <div class="col-8 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <label>Bayar</label>
                                    </div>
                                    <div class="col-9">
                                        <form wire:submit.prevent='store'>
                                            <input type="hidden" wire:model='jamaahId'>
                                            <input type="text" wire:model='bayar' class="form-control form-control-sm @error('bayar') is-invalid
                                                
                                            @enderror" id="tender currency-field" data-type="currency"
                                                placeholder="Rp. ">
                                            @error('bayar')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <button class="btn btn-primary btn-sm float-right mt-3">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="col-8 mx-auto">
                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body">

                                <div class="d-flex align-items-center mb-3">
                                    <div style="width: 150px;">Keterangan</div>
                                    <div>
                                        @if ($sisa <= 0) <span class="badge badge-success w-auto">Lunas</span>
                                            @else
                                            <span class="badge badge-danger w-auto">Cicil</span>
                                            @endif
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div style="width: 150px;">Tender Isbat</div>
                                    <div>{{ number_format($jamaah->tender) }}</div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div style="width: 150px;">Bayar</div>
                                    <div>{{ number_format($sumBayar) }}</div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div style="width: 150px;">Sisa</div>
                                    <div>{{ number_format($sisa) }}</div>
                                </div>

                                <hr>

                                <table class="table table-bordered">
                                    <thead class="text-center">
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Bayar</th>
                                            <th>Tanggal</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $no=1;
                                        @endphp
                                        @foreach ($bayars as $item)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                {{ number_format($item->bayar) }}
                                            </td>

                                            <td class="text-sm text-center">
                                                {{ $item->created_at }}

                                            </td>
                                            <td class="text-center">


                                                <button wire:click='destroy({{ $item->id }})'
                                                    class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>&nbsp;
                                                    Hapus
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

</div>