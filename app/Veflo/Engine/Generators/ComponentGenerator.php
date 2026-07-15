<?php

namespace App\Veflo\Engine\Generators;

class ComponentGenerator extends AbstractGenerator
{
    protected string $component;

    public function __construct(string $component)
    {
        $this->component = strtolower($component);
    }

    public function generate(): void
    {
        $variables = [
    'ComponentName' => strtolower($this->component),
        ];

        /*
        |--------------------------------------------------------------------------
        | Blade Component
        |--------------------------------------------------------------------------
        */

        $this->createDirectory(
            resource_path("views/components/ui")
        );

        $this->copyStub(
            "stubs/component/component.stub.blade.php",
            resource_path("views/components/ui/{$this->component}.blade.php"),
            $variables
        );

        /*
        |--------------------------------------------------------------------------
        | CSS Component
        |--------------------------------------------------------------------------
        */

        $this->createDirectory(
            resource_path("css/components")
        );

        $this->copyStub(
            "stubs/component/component.stub.css",
            resource_path("css/components/{$this->component}.css"),
            $variables
        );
    }
}