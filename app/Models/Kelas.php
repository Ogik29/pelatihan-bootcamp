<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent; // harus menambahkan ini jika menggunakan mongoDB

class Kelas extends Eloquent
{
    use HasFactory;

    protected $fillable = [
        'nama_kelas',
        'wali_kelas'
    ];

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
