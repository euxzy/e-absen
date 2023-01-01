<?php

namespace App\Http\Livewire\Siswa\List;

use App\Models\Siswa;
use Livewire\Component;

class PerKelas extends Component
{
    public $kelas;

    public function render()
    {
        $siswas = Siswa::query()->where('id_kelas', $this->kelas->id)->get();

        $data = [
            'siswas' => $siswas,
            'kelas' => $this->kelas
        ];

        return view('livewire.siswa.list.per-kelas', $data);
    }
}
