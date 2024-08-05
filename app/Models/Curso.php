<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // Tabla asociada
    protected $table = 'cursos';

    // Campos que se pueden asignar de forma masiva
    protected $fillable = ['curso', 'nivel'];

    // Relaciones
    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class);
    }
}
