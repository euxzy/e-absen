<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class WaliKelas extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'walkels';

    protected static function boot()
    {
        parent::boot();

        static::creating(function (WaliKelas $walkel) {
            $walkel->password = Hash::make($walkel->password);
        });

        static::updating(function (WaliKelas $walkel) {
            if ($walkel->isDirty(['password'])) {
                $walkel->password = Hash::make($walkel->password);
            }
        });
    }
}
