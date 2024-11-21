<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    use HasFactory;
    protected $table = 'kurikulum';
    protected $fillable = ['kode', 'nama', 'semester', 'sks', 'tahun'];
    public $timestamps = false;
}
