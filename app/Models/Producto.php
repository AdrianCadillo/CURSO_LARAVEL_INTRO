<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    /// asignacion masiva
    protected $fillable = ["nombre_producto","descripcion","precio","stock","categoria_id"];
    /**
     * uno | muchos productos pertenecen a un tipo
     * 1:1 - 1:n
     */
    public function tipo()
    {
        return $this->belongsTo(Tipo::class,"categoria_id","id_categoria");
    }
}
