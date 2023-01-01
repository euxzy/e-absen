<?php

namespace App\Http\Livewire\Kelas\Add;

use App\Models\WaliKelas;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $walkels = WaliKelas::query()->get();
        return view('livewire.kelas.add.index', ['walkels' => $walkels]);
    }
}
