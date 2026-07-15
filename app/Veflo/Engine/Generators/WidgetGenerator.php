<?php

namespace App\Veflo\Engine\Generators;

class WidgetGenerator extends AbstractGenerator
{
    protected string $widget;

    public function __construct(string $widget)
    {
        $this->widget = strtolower($widget);
    }

    public function generate(): void
    {
        $variables = [
            'WidgetName' => strtolower($this->widget),
        ];

        /*
        |--------------------------------------------------------------------------
        | Blade Widget
        |--------------------------------------------------------------------------
        */

        $this->createDirectory(
            resource_path("views/widgets")
        );

        $this->copyStub(
            "stubs/widget/widget.stub.blade.php",
            resource_path("views/widgets/{$this->widget}.blade.php"),
            $variables
        );

        /*
        |--------------------------------------------------------------------------
        | CSS Widget
        |--------------------------------------------------------------------------
        */

        $this->createDirectory(
            resource_path("css/widgets")
        );

        $this->copyStub(
            "stubs/widget/widget.stub.css",
            resource_path("css/widgets/{$this->widget}.css"),
            $variables
        );
    }
}