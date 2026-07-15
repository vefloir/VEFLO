<?php

namespace App\Veflo\Engine\Generators;

class PageGenerator extends AbstractGenerator
{
    protected string $page;

    public function __construct(string $page)
    {
        $this->page = strtolower($page);
    }

    public function generate(): void
    {
        $variables = [
            'PageName' => ucfirst($this->page),
        ];

        // View
        $this->createDirectory(
            resource_path("views/{$this->page}")
        );

        $this->copyStub(
            "stubs/page/page.stub.blade.php",
            resource_path("views/{$this->page}/index.blade.php"),
            $variables
        );

        // CSS
        $this->createDirectory(
            resource_path("css/layouts")
        );

        $this->copyStub(
            "stubs/page/page.stub.css",
            resource_path("css/layouts/{$this->page}.css"),
            $variables
        );
    }
}