<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    // Kolom apa yang bisa diisi
    protected $fillable = [
        'nim',
        'nama',
        'tmp_lahir',
        'tgl_lahir',
        'ipk',
        'prodi_id',
        'rombel_id',
    ];
    public $timestamps = false;
    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }

    public function rombonganBelajar()
    {
        return $this->belongsTo(Rombongan_belajar::class, 'rombel_id');
    }
}
