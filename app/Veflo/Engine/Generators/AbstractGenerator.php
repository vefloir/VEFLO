<?php

namespace App\Veflo\Engine\Generators;

use App\Veflo\Engine\Contracts\GeneratorInterface;

abstract class AbstractGenerator implements GeneratorInterface
{
    /**
     * Create directory if it does not exist.
     */
    protected function createDirectory(string $path): void
    {
        if (! is_dir($path)) {
            mkdir($path, 0755, true);
        }
    }

    /**
     * Copy stub file and replace variables.
     */
    protected function copyStub(
        string $stub,
        string $destination,
        array $variables = []
    ): void {

        $content = file_get_contents(base_path($stub));

        foreach ($variables as $key => $value) {
            $content = str_replace(
                "{{{$key}}}",
                $value,
                $content
            );
        }

        file_put_contents($destination, $content);
    }

    /**
     * Every generator must implement this.
     */
    abstract public function generate(): void;
}