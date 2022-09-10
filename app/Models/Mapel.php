<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent; // harus menambahkan ini jika menggunakan mongoDB

class Mapel extends Eloquent
{
    use HasFactory;

    protected $fillable = [
        'nama_mapel'
    ];

    public function nilai_mapel()
    {
        return $this->hasMany(NilaiMapel::class);
    }
}
