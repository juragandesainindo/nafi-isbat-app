<?php

namespace App\Http\Livewire;

use App\Models\BayarNafiIsbat;
use App\Models\Jamaah;
use Livewire\Component;

class HomeLivewire extends Component
{
    public $totalJamaah, $totalJamaahPria, $totalJamaahWanita, $totalNafiIsbat, $totalBayar;

    public function render()
    {
        $this->totalJamaah = Jamaah::count();
        $this->totalJamaahPria = Jamaah::where('jk', 'Laki-laki')->count();
        $this->totalJamaahWanita = Jamaah::where('jk', 'Perempuan')->count();
        $this->totalNafiIsbat = Jamaah::sum('tender');
        $this->totalBayar = BayarNafiIsbat::sum('bayar');
        // dd($this->totalNafiIsbat, $this->totalBayar);
        return view('livewire.home-livewire');
    }
}
