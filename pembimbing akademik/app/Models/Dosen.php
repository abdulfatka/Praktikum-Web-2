<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    // tabel database
    protected $table = 'dosens';
    // Kolom apa yang bisa diisi
    protected $fillable = [
        'nidn',
        'nama',
        'tmp_lahir',
        'tgl_lahir',
        'jk',
        'prodi_id',
    ];
    // disable timestamps
    public $timestamps = false;

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }

    public function rombonganBelajar()
    {
        return $this->hasMany(Rombongan_belajar::class, 'dosen_pa', 'id');
    }

}
