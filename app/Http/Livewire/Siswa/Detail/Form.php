<?php

namespace App\Http\Livewire\Siswa\Detail;

use App\Models\Kelas;
use App\Models\Siswa;
use Livewire\Component;

class Form extends Component
{
    public $nis;

    public function render()
    {
        $kelass = Kelas::query()->get();
        $siswa = Siswa::query()->where('nis', $this->nis)->first();
        $siswa['kelas'] = Kelas::query()->get()->filter(fn ($kelas) => $kelas->id == $siswa->id_kelas)->first();

        $data = [
            'siswa' => $siswa,
            'kelass' => $kelass
        ];

        return view('livewire.siswa.detail.form', $data);
    }
}
