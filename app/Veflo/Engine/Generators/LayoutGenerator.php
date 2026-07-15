<?php

namespace App\Veflo\Engine\Generators;

class LayoutGenerator extends AbstractGenerator
{
    protected string $layout;

    public function __construct(string $layout)
    {
        $this->layout = strtolower($layout);
    }

    public function generate(): void
    {
        $variables = [
            'LayoutName' => strtolower($this->layout),
        ];

        /*
        |--------------------------------------------------------------------------
        | Blade Layout
        |--------------------------------------------------------------------------
        */

        $this->createDirectory(
            resource_path("views/layouts")
        );

        $this->copyStub(
            "stubs/layout/layout.stub.blade.php",
            resource_path("views/layouts/{$this->layout}.blade.php"),
            $variables
        );

        /*
        |--------------------------------------------------------------------------
        | CSS Layout
        |--------------------------------------------------------------------------
        */

        $this->createDirectory(
            resource_path("css/layouts")
        );

        $this->copyStub(
            "stubs/layout/layout.stub.css",
            resource_path("css/layouts/{$this->layout}.css"),
            $variables
        );
    }
}