<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'tbl_categorias';

    protected $fillable=[
        'nombre'
    ];
    use HasFactory;

    public function noticias(){
        return $this->hasMany(Noticia::class, 'id_categoria');
    }
}
