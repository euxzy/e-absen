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

        $absen = Absen::query()->get()->filter(fn ($a) => $a->id_siswa == $siswa->id)->count();

        $siswa['absenHadir'] = 0;
        $siswa['absenSakit'] = 0;
        $siswa['absenIzin'] = 0;

        if ($absen > 0) {
            $siswa['absenHadir'] = ($hadir / $absen) * 100;
            $siswa['absenSakit'] = ($sakit / $absen) * 100;
            $siswa['absenIzin'] = ($izin / $absen) * 100;
        }

        $data = [
            'siswa' => $siswa,
        ];

        return view('livewire.siswa.detail.persentase', $data);
    }
}
