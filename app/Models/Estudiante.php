<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $primaryKey = "id_estudiante";

    protected $guarded = ["id_estudiante"];


    /**
     * Estudiante tiene o lleva muchos cursos n:m
     */

     public function cursos()
     {
        return $this->belongsToMany(Estudiante::class,"curso_estudiantes","estudiante_id","curso_id");
     }

    use HasFactory;
}
