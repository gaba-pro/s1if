<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $fillable = ['nama', 'waktu_mulai', 'waktu_selesai', 'deskripsi_singkat', 'jenis', 'lokasi', 'penyelenggara', 'kontak', 'deskripsi', 'penjelasan'];
}
