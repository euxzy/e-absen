<?php

namespace App\Http\Livewire\Kelas\List;

use App\Models\Kelas;
use App\Models\WaliKelas;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $kelass = Kelas::query()->orderBy('tingkat', 'asc')
            ->orderBy('nama', 'asc')->get()->map(function ($kelas) {
                $kelas['walkel'] = WaliKelas::query()->get()
                    ->filter(fn ($walkel) => $walkel->id == $kelas->id_wali_kelas)->first();
                return $kelas;
            });
        // dd($kelass);

        $data = [
            'kelass' => $kelass
        ];

        return view('livewire.kelas.list.index', $data);
    }
}
