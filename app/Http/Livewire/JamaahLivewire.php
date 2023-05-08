<?php

namespace App\Http\Livewire;

use App\Models\Jamaah;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class JamaahLivewire extends Component
{
    use WithPagination;

    public $nama, $jk, $alamat, $tender, $search, $jamaahId;
    public $updateMode = false;
    public $paginate = 10;

    protected $updatesQueryString = ['search'];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {

        return view('livewire.jamaah-livewire', [
            // 'jamaah' => Jamaah::latest()->paginate($this->paginate)
            'jamaah' => $this->search === null ?
                Jamaah::latest()->paginate($this->paginate) :
                Jamaah::latest()
                ->where('nama', 'like', '%' . $this->search . '%')
                ->orWhere('alamat', 'like', '%' . $this->search . '%')
                ->paginate($this->paginate)
        ]);
    }

    public function store()
    {
        $input = $this->validate([
            'nama' => 'required|min:3',
            'jk' => 'required',
            'alamat' => 'required',
            'tender' => 'required',
        ]);

        $input['tender'] = str_replace(',', '', $input['tender']);
        $input['slug'] = Str::slug($this->nama, '-');

        Jamaah::create($input);



        session()->flash('message', 'Tambah jamaah berhasil...');

        $this->resetInput();

        $this->emit('jamaahStore');
    }

    public function show($id)
    {
        $jamaah = Jamaah::find($id);
        $this->emit('jamaahShow', $jamaah);
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $jamaah = Jamaah::where('id', $id)->first();
        $this->nama = $jamaah['nama'];
        $this->jk = $jamaah['jk'];
        $this->alamat = $jamaah['alamat'];
        $this->tender = $jamaah['tender'];
        $this->jamaahId = $jamaah['id'];
        // dd($jamaah);
    }

    public function update()
    {
        $this->validate([
            'nama' => 'required|min:3',
            'jk' => 'required',
            'alamat' => 'required',
            'tender' => 'required',
        ]);

        if ($this->jamaahId) {
            $jamaah = Jamaah::find($this->jamaahId);
            $jamaah->update([
                'nama' => $this->nama,
                'slug' => Str::slug($this->nama, '-'),
                'jk' => $this->jk,
                'alamat' => $this->alamat,
                'tender' => str_replace(',', '', $this->tender),

            ]);
        }

        $this->updateMode = false;
        session()->flash('message', 'Update jamaah berhasil...');
        $this->resetInput();
        $this->emit('jamaahUpdate');
    }

    public function destroy($id)
    {
        if ($id) {
            Jamaah::find($id)->delete();
            session()->flash('message', 'Hapus jamaah berhasil...');

            $this->emit('jamaahDelete', 'id');
        }
    }

    public function resetInput()
    {
        $this->nama = null;
        $this->jk = null;
        $this->alamat = null;
        $this->tender = null;
    }
}
