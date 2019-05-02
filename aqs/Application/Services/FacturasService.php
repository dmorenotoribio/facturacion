<?php

namespace Aqs\Application\Services;

use Aqs\Application\Contracts\Services\IFacturasService;
use Aqs\Infrastructure\Repository\Contracts\Repositories\IFacturasRepository;

class FacturasService implements IFacturasService
{
    private $repository;

    public function __construct(IFacturasRepository $repo)
    {
        $this->repository = $repo;
    }
    
    public function ObtenerListadoFacturas()
    {
        return $this->repository->ObtenerListadoFacturasDeBaseDeDatos();
    }

}