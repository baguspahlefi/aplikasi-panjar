<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerkaraDetailTabel extends Model
{
    protected $table = 'perkara_detail_tabel';
    protected $primaryKey = 'perkara_detail_id';
    public $timestamps = false;

    protected $casts = [
        'perkara_id' => 'int' 
    ];
    
    protected $dates = [
        'tgl_transaksi' => 'date:YYYY-MM-DD'
    ];

    protected $fillable = [
        'uraian',
        'tgl_transaksi',
        'pihak',
        'pemasukan',
        'pengeluaran',
        'keterangan'
    ];

    public function perkara_tabel()
	{
		return $this->belongsTo(PerkaraTabel::class, 'perkara_id');
	}

}
