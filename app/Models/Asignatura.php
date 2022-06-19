<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;
    protected $fillable = [
                'nombre_materia',
                'cantidad_creditos',
                'docente',
                'asignatura_prerequisito',
                'horas_autonomas',
                'horas_dirigidas',
    ];
}
