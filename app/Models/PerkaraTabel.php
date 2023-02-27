<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerkaraTabel extends Model
{
    protected $table = 'perkara_tabel';
    protected $primaryKey = 'perkara_id';
    public $timestamps = false;

    
    protected $dates = [
        'tgl_pendaftaran' => 'date:YYYY-MM-DD'
    ];

    protected $fillable = [
        'nomor_perkara',
        'klasifikasi',
        'tgl_pendaftaran',
        'penggugat',
        'no_telepon',
        'tergugat',
        'prodeo',
        'status_keterangan',
        'bukti_transfer'
    ];

    public function perkara_detail_tabels()
	{
		return $this->hasMany(PerkaraDetailTabel::class, 'perkara_id');
	}
}
