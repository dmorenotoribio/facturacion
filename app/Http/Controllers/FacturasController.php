<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Aqs\Application\Contracts\Services\IFacturasService;

class FacturasController extends Controller
{
    public function ObtenerListadoFacturas(IFacturasService $service)
    {        
        $result = $service->ObtenerListadoFacturas();
        return response(json_encode($result))->header('Content-Type','application/json');
    }

}
