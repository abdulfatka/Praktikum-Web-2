<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rombongan_belajar extends Model
{
    use HasFactory;
    protected $table = 'rombongan_belajars';
    // Kolom apa yang bisa diisi
    protected $fillable = [
        'kode',
        'thn_masuk',
        'dosen_pa',
    ];
    public $timestamps = false;
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_pa', 'id');
    }

    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class, 'rombel_id');
    }

}
