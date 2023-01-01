<?php

namespace App\Http\Livewire\Admin\Detail;

use App\Models\Admin;
use Livewire\Component;

class Form extends Component
{
    public $idAdmin;

    public function render()
    {
        $admin = Admin::query()->where('id', $this->idAdmin)->first();

        return view('livewire.admin.detail.form', ['admin' => $admin]);
    }
}
