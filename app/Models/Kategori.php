<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'slug',
        'icon'
    ];
    
    protected $guarded = ['id'];

    public function posts(){
        return $this->hasMany(Post::class, 'idKategori');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
