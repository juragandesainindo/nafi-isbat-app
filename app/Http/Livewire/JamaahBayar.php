<?php

namespace App\Http\Livewire;

use App\Models\BayarNafiIsbat;
use App\Models\Jamaah;
use Livewire\Component;

class JamaahBayar extends Component
{

    public $jamaah, $bayars, $jamaahId,  $bayar, $sumBayar, $sisa;

    public function mount($id)
    {
        $this->jamaah = Jamaah::find($id);
        $this->jamaahId = $this->jamaah['id'];
        // dd($jamaah->toArray());
    }
    public function render()
    {
        $this->bayars = BayarNafiIsbat::where('jamaah_id', $this->jamaahId)
            ->latest()->get();
        $this->sumBayar = $this->bayars->sum('bayar');
        $this->jamaah->tender;
        $this->sisa = $this->jamaah->tender - $this->sumBayar;
        // dd($this->sisa);
        // dd($this->sumBayar);
        return view('livewire.jamaah-bayar');
    }

    public function store()
    {
        $this->validate([
            'bayar' => 'required'
        ]);

        BayarNafiIsbat::create([
            'bayar' => str_replace(',', '', $this->bayar),
            'jamaah_id' => $this->jamaahId,
        ]);
        // dd($data);
        session()->flash('message', 'Tambah bayar nafi isbat berhasil...');

        $this->resetInput();
    }

    public function destroy($id)
    {
        if ($id) {
            BayarNafiIsbat::find($id)->delete();
            session()->flash('message', 'Hapus bayar nafi isbat berhasil...');

            // $this->emit('jamaahDelete');
        }
    }

    public function resetInput()
    {
        $this->bayar = null;
    }
}
