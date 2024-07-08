<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Escuela extends Model
{
    protected $primaryKey = "id_escuela";

    /**
     * ASIGNACION MASIVA
     */
    protected $fillable = ["nombre_escuela","facultad_id"];
    use HasFactory,SoftDeletes;
    const DELETED_AT = "eliminado_escuelas";


}
