<?php

namespace App\Http\Livewire\Walkel\Detail;

use App\Models\WaliKelas;
use Livewire\Component;

class Index extends Component
{
    public $nuptk;

    public function render()
    {
        // dd($this->nuptk);
        $walkel = WaliKelas::query()->where('nuptk', $this->nuptk)->first();
        // dd($walkel);

        return view('livewire.walkel.detail.index', ['walkel' => $walkel]);
    }
}
