<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent; // harus menambahkan ini jika menggunakan mongoDB

class NilaiMapel extends Eloquent
{
    use HasFactory;

    protected $fillable = [
        'siswa_id',
        'mapel_id',
        'ls_1',
        'ls_2',
        'ls_3',
        'ls_4',
        'uh_1',
        'uh_2',
        'uts',
        'uas',
        'rata_rata'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
}
