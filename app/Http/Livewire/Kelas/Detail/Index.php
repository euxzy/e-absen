<?php

namespace App\Http\Livewire\Kelas\Detail;

use App\Models\Kelas;
use App\Models\WaliKelas;
use Livewire\Component;

class Index extends Component
{
    public $idKelas;

    public function render()
    {
        $kelas = Kelas::query()->where('id', $this->idKelas)->first();
        $kelas['walkel'] = WaliKelas::query()->get()
            ->filter(fn ($walkel) => $walkel->id == $kelas->id_wali_kelas)->first();

        return view('livewire.kelas.detail.index', ['kelas' => $kelas]);
    }
}
