<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\ApiQueryScopes;

class Asesor extends Model
{
    use HasFactory, ApiQueryScopes;

    protected $table = 'asesores';

    protected array $allowIncluded = ['compras', 'concesionario'];
    protected array $allowFilter = ['id', 'nombre', 'email', 'celular', 'concesionario_id'];
    protected array $allowSort = ['id', 'nombre', 'email', 'celular', 'concesionario_id'];
    protected array $allowCount = ['compras'];

    protected $fillable = [
        'nombre',
        'email',
        'celular',
        'concesionario_id'
    ];

    public function compras()
    {
        return $this->hasMany(Compra::class);
    }

    public function concesionario()
    {
        return $this->belongsTo(Concesionario::class);
    }
}
