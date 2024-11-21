<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kompetisi extends Model
{
    use HasFactory;
    protected $table = 'kompetisi';
    public $timestamps = false;
    protected $fillable = ['nama', 'tanggal', 'penyelenggara', 'keterangan', 'gambar', 'link'];
}
