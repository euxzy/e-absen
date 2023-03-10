<?php

namespace App\Http\Livewire\Siswa\Detail;

use App\Models\Absen;
use App\Models\Kelas;
use App\Models\Siswa;
use Livewire\Component;

class Index extends Component
{
    public $nis;


    public function render()
    {
        // dd($this->nis);

        $siswa = Siswa::query()->where('nis', $this->nis)->first();
        $siswa['kelas'] = Kelas::query()->get()->filter(fn ($kelas) => $kelas->id == $siswa->id_kelas)->first();

        $data = [
            'siswa' => $siswa
        ];

        // dd($siswa);
        return view('livewire.siswa.detail.index', $data);
    }
}
