<?php

namespace App\Http\Livewire\Walkel\List;

use App\Models\WaliKelas;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $walkels = WaliKelas::query()->get();

        $data = [
            'walkels' => $walkels
        ];
        return view('livewire.walkel.list.index', $data);
    }
}
