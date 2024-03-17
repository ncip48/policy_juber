<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MitraModel extends Model
{
    use HasFactory;

    protected $table = 'd_mitra';
    protected $primaryKey = 'mitra_id';

    protected $fillable = [
        'mitra_nama_perusahaan',
        'mitra_nama_apk'
    ];
}
