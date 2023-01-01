<?php

namespace App\Http\Livewire\Walkel\Profile;

use App\Models\WaliKelas;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $id = session('idUser');
        $walkel = WaliKelas::query()->where('id', $id)->first();

        return view('livewire.walkel.profile.index', ['walkel' => $walkel]);
    }
}
