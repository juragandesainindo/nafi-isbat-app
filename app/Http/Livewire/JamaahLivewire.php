<?php

namespace App\Http\Livewire;

use Livewire\Component;

class JamaahLivewire extends Component
{
    public $nama, $jk, $alamat, $tender;


    public function render()
    {
        return view('livewire.jamaah-livewire');
    }
}
