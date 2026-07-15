<?php

namespace App\Veflo\Engine\Generators;

class ServiceGenerator extends AbstractGenerator
{
    protected string $service;

    public function __construct(string $service)
    {
        $this->service = ucfirst($service);
    }

    public function generate(): void
    {
        $variables = [
            'ServiceName' => ucfirst($this->service),
        ];

        /*
        |--------------------------------------------------------------------------
        | Service Class
        |--------------------------------------------------------------------------
        */

        $this->createDirectory(
            app_path("Services")
        );

        $this->copyStub(
            "stubs/service/service.stub.php",
            app_path("Services/{$this->service}.php"),
            $variables
        );
    }
}