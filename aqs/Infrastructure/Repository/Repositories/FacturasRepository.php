<?php

namespace Aqs\Infrastructure\Repository\Repositories;

use Aqs\Infrastructure\Repository\Contracts\Repositories\IFacturasRepository;

class FacturasRepository implements IFacturasRepository
{
    public function ObtenerListadoFacturasDeBaseDeDatos(): array
    {        
        $result = [
        [
            "IDFactura" => 1,
            "Fecha" => 20190502,
            "Nombre" => "Ramon Rodriguez"
        ],
        [
            "IDFactura" => 2,
            "Fecha" => 20190502,
            "Nombre" => "Ramon Rodriguez"
        ],
        [
            "IDFactura" => 3,
            "Fecha" => 20190502,
            "Nombre" => "Ramon Rodriguez"
        ]    
        ];

        return $result;
    }

}


