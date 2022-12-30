<?php

namespace App\Http\Livewire\Siswa\List;

use App\Models\Kelas;
use App\Models\Siswa;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $kelass = Kelas::query()->get();
        $siswas = Siswa::query()->get()->map(function ($siswa) use ($kelass) {
            $siswa['kelas'] = $kelass->filter(fn ($kelas) => $kelas->id == $siswa->id_kelas)->first();
            return $siswa;
        });
        // dd($siswas);

        $data = [
            'siswas' => $siswas
        ];

        return view('livewire.siswa.list.index', $data);
    }
}
