<?php

namespace App\Http\Livewire\Admin\Detail;

use App\Models\Admin;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $id = session('idUser');
        // dd($id);
        $admin = Admin::query()->where('id', $id)->first();
        $data = [
            'admin' => $admin
        ];

        return view('livewire.admin.detail.index', $data);
    }
}
