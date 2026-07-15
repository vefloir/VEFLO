<?php

namespace App\Veflo\Engine\Generators;

class ModuleGenerator extends AbstractGenerator
{
    protected string $module;
    protected string $base;

    public function __construct(string $module)
    {
        $this->module = $module;
        $this->base = base_path("Modules/{$module}");
    }

    public function generate(): void
    {
        $this->createDirectories();

        $variables = [
            'ModuleName' => $this->module,
        ];

        $this->copyStub(
            'stubs/module/Blueprint.stub',
            "{$this->base}/Blueprint.md",
            $variables
        );

        $this->copyStub(
            'stubs/module/Version.stub',
            "{$this->base}/Version.md",
            $variables
        );

        $this->copyStub(
            'stubs/module/module.stub.json',
            "{$this->base}/module.json",
            $variables
        );
    }

    protected function createDirectories(): void
    {
        $this->createDirectory($this->base);

        $directories = [
            'Controllers',
            'Services',
            'Views',
            'Components',
            'Assets',
            'Docs',
            'Tests',
        ];

        foreach ($directories as $dir) {
            $this->createDirectory("{$this->base}/{$dir}");
        }
    }
}