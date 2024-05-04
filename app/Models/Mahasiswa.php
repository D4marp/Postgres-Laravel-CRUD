<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas'; // Nama tabel dalam database

    protected $fillable = [ // Kolom-kolom yang dapat diisi secara massal (mass assignment)
        'nama',
        'nim',
        'jurusan',];

}
