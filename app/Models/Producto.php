<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    /**
     * uno | muchos productos pertenecen a un tipo
     */
    public function tipo()
    {
        return $this->belongsTo(Tipo::class,"categoria_id","id_categoria");
    }
}
