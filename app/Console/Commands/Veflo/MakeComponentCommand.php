<?php

namespace App\Console\Commands\Veflo;

use Illuminate\Console\Command;
use App\Veflo\Engine\Factory\GeneratorFactory;

class MakeComponentCommand extends Command
{
    /**
     * Command Signature
     */
    protected $signature = 'veflo:make-component {name}';

    /**
     * Command Description
     */
    protected $description = 'Create a new VEFLO Component';

    /**
     * Execute Command
     */
    public function handle()
    {
        $name = $this->argument('name');

        $generator = GeneratorFactory::make(
            'component',
            $name
        );

        $generator->generate();

        $this->info("Component {$name} created successfully.");

        return self::SUCCESS;
    }
}