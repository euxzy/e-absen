<?php

namespace App\Http\Livewire\Walkel\Detail;

use App\Models\WaliKelas;
use Livewire\Component;

class Form extends Component
{
    public $nuptk;

    public function render()
    {
        $walkel = WaliKelas::query()->where('nuptk', $this->nuptk)->first();

        return view('livewire.walkel.detail.form', ['walkel' => $walkel]);
    }
}
