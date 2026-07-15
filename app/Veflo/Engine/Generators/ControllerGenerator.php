<?php

namespace App\Veflo\Engine\Generators;

class ControllerGenerator extends AbstractGenerator
{
    protected string $controller;

    public function __construct(string $controller)
    {
        $this->controller = ucfirst($controller);
    }

    public function generate(): void
    {
        $variables = [
            'ControllerName' => ucfirst($this->controller),
        ];

        /*
        |--------------------------------------------------------------------------
        | Controller
        |--------------------------------------------------------------------------
        */

        $this->createDirectory(
            app_path("Http/Controllers")
        );

        $this->copyStub(
            "stubs/controller/controller.stub.php",
            app_path("Http/Controllers/{$this->controller}Controller.php"),
            $variables
        );
    }
}