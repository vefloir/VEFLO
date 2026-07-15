<?php

namespace App\Veflo\Engine\Contracts;

interface GeneratorInterface
{
    /**
     * Execute generator.
     */
    public function generate(): void;
}