<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'tbl_noticias';
    
    protected $fillable =[
        'titulo',
        'descripcion',
        'id_categorias'
    ];
    use HasFactory;

    public function categoria(){
        return
        $this->belongsTo(Categoria::class, 'id_categorias');
    }
}
