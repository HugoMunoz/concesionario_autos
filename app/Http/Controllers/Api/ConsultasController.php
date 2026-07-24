<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Asesor;
use App\Models\Compra;
use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    public function index()
    {
        $asesores = Asesor::query()
            ->included()
            ->filter()
            ->sort()
            ->getOrPaginate();

        return response()->json([
            'status' => 'success',
            'data' => $asesores
        ]);
    }

    public function show(Asesor $asesor)
    {
        return response()->json([
            'status' => 'success',
            'message' => "Mostrando asesor con ID: $asesor"
        ]);
    }

    public function comprasAsesor($asesor)
    {
        $compras = Compra::with([
            'cliente',
            'automovil'
        ])
            ->where('asesor_id', $asesor)
            ->get();

        return response()->json([
            'status' => 'success',
            'data' => $compras
        ]);
    }

    public function comprasCliente($cliente)
    {
        $compras = Compra::with([
            'asesor',
            'automovil'
        ])
            ->where('cliente_id', $cliente)
            ->get();

        return response()->json([
            'status' => 'success',
            'data' => $compras
        ]);
    }

    public function comprasClientesAsesores()
    {
        $compras = Compra::with([
            'cliente',
            'asesor'
        ])->get();

        return response()->json([
            'status' => 'success',
            'data' => $compras
        ]);
    }
}
