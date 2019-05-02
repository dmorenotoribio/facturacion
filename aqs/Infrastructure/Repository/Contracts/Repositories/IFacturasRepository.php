<?php

namespace Aqs\Infrastructure\Repository\Contracts\Repositories;

interface IFacturasRepository
{
    public function ObtenerListadoFacturasDeBaseDeDatos(): array;
}