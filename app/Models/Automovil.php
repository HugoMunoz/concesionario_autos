<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\ApiQueryScopes;

class Automovil extends Model
{
    use HasFactory, ApiQueryScopes;

    protected $table = 'automoviles';

    protected array $allowIncluded = ['compras', 'concesionario'];
    protected array $allowFilter = ['id', 'marca', 'modelo', 'cilindraje', 'concesionario_id'];
    protected array $allowSort = ['id', 'marca', 'modelo', 'cilindraje', 'concesionario_id'];
    protected array $allowCount = ['compras'];

    protected $fillable = [
        'marca',
        'modelo',
        'cilindraje',
        'concesionario_id',
    ];

    public function concesionario()
    {
        return $this->belongsTo(Concesionario::class);
    }

    public function compras()
    {
        return $this->hasMany(Compra::class);
    }
}
