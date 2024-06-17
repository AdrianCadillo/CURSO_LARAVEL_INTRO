<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model /// categorias, id
{

    protected $table = "tipos";
    protected $primaryKey = "id_categoria";
    use HasFactory;
}
