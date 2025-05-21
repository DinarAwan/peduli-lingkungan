<?php

namespace App\Models;

use App\Models\Laporan;
use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{

    protected $table = 'kategori'; // Nama tabel di database

    protected $fillable = [
        'kategori',
    ];

    public function bukus()
    {
        return $this->hasMany(Laporan::class, 'kategori_id', 'id');
    }

}
