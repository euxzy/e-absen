<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'siswas';

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Siswa $siswa) {
            $siswa->password = Hash::make($siswa->password);
        });

        static::updating(function (Siswa $siswa) {
            if ($siswa->isDirty(['password'])) {
                $siswa->password = Hash::make($siswa->password);
            }
        });
    }
}
