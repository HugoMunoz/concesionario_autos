<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\ApiQueryScopes;

class Concesionario extends Model
{
    use HasFactory, ApiQueryScopes;

    protected $table = 'concesionarios';

    protected array $allowIncluded = ['asesores', 'automoviles'];
    protected array $allowFilter = ['id', 'nombre', 'ubicacion', 'ciudad'];
    protected array $allowSort = ['id', 'nombre', 'ubicacion', 'ciudad'];
    protected array $allowCount = ['asesores', 'automoviles'];

    protected $fillable = [
        'nombre',
        'ubicacion',
        'ciudad',
    ];

    public function asesores()
    {
        return $this->hasMany(Asesor::class);
    }

    public function automoviles()
    {
        return $this->hasMany(Automovil::class);
    }
}
