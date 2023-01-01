<?php

namespace App\Http\Livewire\Kelas\List;

use App\Models\Kelas;
use Livewire\Component;

class PerWalkel extends Component
{
    public $walkel;

    public function render()
    {
        $kelass = Kelas::query()->where('id_wali_kelas', $this->walkel->id)->get();

        $data = [
            'kelass' => $kelass,
            'walkel' => $this->walkel
        ];

        return view('livewire.kelas.list.per-walkel', $data);
    }
}
