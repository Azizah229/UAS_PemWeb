<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'idKategori',
        'slug',
        'bahan',
        'tutotial',
        'foto',
    ];

    protected $guarded=['id'];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
}
