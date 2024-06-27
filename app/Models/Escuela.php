<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    protected $primaryKey = "id_escuela";

    /**
     * ASIGNACION MASIVA
     */
    protected $fillable = ["nombre_escuela","facultad_id"];
    use HasFactory;
}
