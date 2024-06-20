<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model /// tipos
{
    /// id
    protected $primaryKey = "id_categoria";
    //protected $table = "users";
    use HasFactory;

    /// un tipo tienes muchos productos 1:n (OneToMany)
    public function productos()
    {
        /// id 
        return $this->hasMany(Producto::class,"categoria_id","id_categoria");
    }
}
