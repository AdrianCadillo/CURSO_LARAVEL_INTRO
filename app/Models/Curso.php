<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $primaryKey = "id_curso";

    protected $fillable = ["nombre_curso","estado"];


    /**
     * Curso tiene muchos estudiantes n:m
     */
    public function estudiantes()
    {
        return $this->belongsToMany(Estudiante::class,"curso_estudiantes","curso_id","estudiante_id");
    }
    use HasFactory;
}
