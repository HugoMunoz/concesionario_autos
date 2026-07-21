<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Asesor;
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
}
