<?php

namespace App\Http\Livewire\Kelas\Detail;

use App\Models\WaliKelas;
use Livewire\Component;

class Form extends Component
{
    public $kelas;

    public function render()
    {
        $walkels = WaliKelas::query()->get();
        $data  = [
            'kelas' => $this->kelas,
            'walkels' => $walkels
        ];

        return view('livewire.kelas.detail.form', $data);
    }
}
