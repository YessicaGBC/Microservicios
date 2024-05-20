<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'precio'];
    public $timestamps = false; //omite el timestamps

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }
}