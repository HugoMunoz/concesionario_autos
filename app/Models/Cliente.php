<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\ApiQueryScopes;

class Cliente extends Model
{
    use HasFactory, ApiQueryScopes;

    protected $table = 'clientes';

    protected array $allowIncluded = ['compras'];
    protected array $allowFilter = ['id', 'nombre', 'email', 'celular'];
    protected array $allowSort = ['id', 'nombre', 'email', 'celular'];
    protected array $allowCount = ['compras'];    

protected $fillable = [
        'nombre',
        'email',
        'celular',
    ];

    public function compras()
    {
        return $this->hasMany(Compra::class);
    }
}