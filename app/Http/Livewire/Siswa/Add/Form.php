<?php

namespace App\Http\Livewire\Siswa\Add;

use App\Models\Kelas;
use Livewire\Component;

class Form extends Component
{
    public function render()
    {
        $kelass = Kelas::query()->get();
        $data = [
            'kelass' => $kelass
        ];
        return view('livewire.siswa.add.form', $data);
    }
}
