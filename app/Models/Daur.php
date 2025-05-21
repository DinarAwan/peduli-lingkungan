<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daur extends Model
{
    use HasFactory;
    protected $table = "daur";
    protected $fillable = ['nama', 'judul','deskripsi', 'foto', 'langkah1', 'langkah2'];

}
