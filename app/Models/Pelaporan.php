<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaporan extends Model
{
    use HasFactory;
    // untuk default tabel
    protected $table = 'pelaporan';
    // untuk default primary key
    protected $primaryKey = 'id_pelaporan';
    // untuk tabel yang bisa di isi
    protected $fillable = [
        'id_marketing',
        'tgl',
        'jenis',
    ];
}
