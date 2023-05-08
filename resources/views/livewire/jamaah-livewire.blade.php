<div>

    @include('livewire.jamaah.create')
    @include('livewire.jamaah.edit')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Jamaah</h1>
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

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#create">
                                        <i class="fas fa-plus-circle"></i>&nbsp;
                                        Tambah Jamaah
                                    </button>
                                </h3>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-6">
                                        <select wire:model='paginate' class="form-control form-control-sm w-auto">
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="50">50</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" wire:model='search'
                                            class="form-control form-control-sm w-100" placeholder="Search">
                                    </div>
                                </div>

                                <table class="table table-bordered">
                                    <thead class="text-center">
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Nama</th>
                                            <th>JK</th>
                                            <th>Alamat</th>
                                            <th>Tender (Rp)</th>
                                            <th>Keterangan</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $no=1;
                                        @endphp
                                        @foreach ($jamaah as $item)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td class="text-center">
                                                @if ($item->jk == 'Perempuan')
                                                <div class="badge badge-warning">Perempuan</div>
                                                @else
                                                <div class="badge badge-primary">Laki-laki</div>
                                                @endif
                                            </td>
                                            <td>{{ $item->alamat }}</td>
                                            <td class="text-right">{{ number_format($item->tender) }}</td>
                                            <td class="text-center">
                                                @if ($item->tender - $item->bayarNafiIsbat->sum('bayar') == 0)
                                                <span class="badge badge-success">Lunas</span>
                                                @else
                                                <span class="badge badge-danger">Cicil</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('jamaah.show',$item->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fas fa-money-bill"></i>&nbsp;
                                                    Bayar
                                                </a>
                                                <button wire:click='edit({{ $item->id }})' class="btn btn-info btn-sm"
                                                    data-toggle="modal" data-target="#edit">
                                                    <i class="fas fa-edit"></i>&nbsp;
                                                    Edit
                                                </button>
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

                                <div class="mt-2 float-right">
                                    {{ $jamaah->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

</div>

@push('js')
<script type="text/javascript">
    window.livewire.on('jamaahStore', () => {
            $('#create').modal('hide');
        });
</script>
<script type="text/javascript">
    window.livewire.on('jamaahUpdate', () => {
            $('#edit').modal('hide');
        });
</script>
@endpush