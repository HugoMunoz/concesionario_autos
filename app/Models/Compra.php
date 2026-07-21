<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\ApiQueryScopes;

class Compra extends Model
{
    use HasFactory, ApiQueryScopes;

    protected $table = 'compras';

    protected array $allowIncluded = ['cliente', 'asesor', 'automovil'];
    protected array $allowFilter = ['id', 'fecha', 'valor', 'cliente_id', 'asesor_id', 'automovil_id'];
    protected array $allowSort = ['id', 'fecha', 'valor', 'cliente_id', 'asesor_id', 'automovil_id'];
    protected array $allowCount = [];

    protected $fillable = [
        'fecha',
        'valor',
        'cliente_id',
        'asesor_id',
        'automovil_id',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
    
    public function asesor()
    {
        return $this->belongsTo(Asesor::class);
    }
    
    public function automovil()
    {
        return $this->belongsTo(Automovil::class);
    }
}