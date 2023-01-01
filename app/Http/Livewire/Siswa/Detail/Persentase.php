<?php

namespace App\Http\Livewire\Siswa\Detail;

use App\Models\Absen;
use App\Models\Siswa;
use Livewire\Component;

class Persentase extends Component
{
    public $nis;

    public function render()
    {

        $siswa = Siswa::query()->where('nis', $this->nis)->first();

        $hadir = Absen::query()->where('status', 1)->get()
            ->filter(fn ($a) => $a->id_siswa == $siswa->id)->count();

        $sakit = Absen::query()->where('status', 2)->get()
            ->filter(fn ($a) => $a->id_siswa == $siswa->id)->count();

        $izin = Absen::query()->where('status', 3)->get()
            ->filter(fn ($a) => $a->id_siswa == $siswa->id)->count();

        // $absen = Absen::query()->get()->filter(fn ($a) => $a->id_siswa == $siswa->id)->count();

        $siswa['absenHadir'] = floor(($hadir / 30) * 100);
        $siswa['absenSakit'] = floor(($sakit / 30) * 100);
        $siswa['absenIzin'] = floor(($izin / 30) * 100);
        $siswa['tnpKeterangan'] = floor(((30 - $hadir - $sakit - $izin) / 30) * 100);

        $data = [
            'siswa' => $siswa,
        ];

        return view('livewire.siswa.detail.persentase', $data);
    }
}
