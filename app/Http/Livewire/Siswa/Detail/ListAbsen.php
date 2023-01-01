<?php

namespace App\Http\Livewire\Siswa\Detail;

use App\Models\Absen;
use App\Models\Siswa;
use Livewire\Component;

class ListAbsen extends Component
{
    public $idSiswa;
    public $nama;

    public function render()
    {
        $absens = Absen::query()->where('id_siswa', $this->idSiswa)->orderBy('tgl_absen', 'asc')->get();
        // dd($absens);
        $data = [
            'absens' => $absens,
            'nama' => $this->nama
        ];

        return view('livewire.siswa.detail.list-absen', $data);
    }
}
