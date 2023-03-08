<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AjukanPanjarTabel extends Model
{
    use HasFactory;

    protected $table = 'ajukan_panjar';
    protected $primaryKey = 'ajukan_panjar_id';

    protected $casts = [
        'ajukan_panjar_id' => 'int' 
    ];


    protected $fillable = [
        'nama_lengkap',
        'no_telepon',
        'email',
        'no_perkara',
        'no_rekening',
        'jenis_bank',
        'jenis_perkara',
        'ktp',
        'kta'
    ];
}
