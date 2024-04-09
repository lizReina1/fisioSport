<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RutinaEjercicio extends Model
{
    use HasFactory;

    protected $table = 'rutina_ejercicio';

    protected $fillable = [
        'accion', 'fecha',
    ];

    public function rutina()
    {
        return $this->belongsToMany(rutina::class, 'rutina_ejercicio', 'rutina_id', 'ejercicio_id');
    }

    public function ejercicio()
    {
        return $this->belongsToMany(Ejercicio::class, 'rutina_ejercicio','ejercicio_id', 'rutina_id');
    }
}
