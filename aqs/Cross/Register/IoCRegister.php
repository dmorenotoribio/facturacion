<?php

namespace Aqs\Cross\Register;

use Illuminate\Support\ServiceProvider;

class IoCRegister extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // SERVICIOS DE APLICACION
        $this->app->bind("Aqs\Application\Contracts\Services\IFacturasService", "Aqs\Application\Services\FacturasService");

        // REPOSITORIOS
        $this->app->bind("Aqs\Infrastructure\Repository\Contracts\Repositories\IFacturasRepository", "Aqs\Infrastructure\Repository\Repositories\FacturasRepository");

        // OTROS
    }
}
