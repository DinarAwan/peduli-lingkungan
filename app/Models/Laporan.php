<?php

namespace App\Models;

use App\Models\KategoriModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laporan extends Model
{
    use HasFactory;
    protected $table = "laporan";
    protected $fillable = ['nama','jenisSampah','NamaJalan', 'DefinisiLokasi', 'dusun', 'RT', 'tanggal', 'kategori_id'];

    public function kategori()
    {
        return $this->belongsTo(KategoriModel::class, 'kategori_id', 'id');
    }
}
