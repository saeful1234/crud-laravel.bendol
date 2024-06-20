<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kariawan extends Model
{
    use HasFactory;

    
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'nama',
        'Alamat',
        'Tempat_lahir',
        'Tanggal_lahir',
        'jenis_kelamin',
        'jabatan',
        'job',
        'masuk_kerja'
    ];
}
