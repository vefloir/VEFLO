<?php

namespace App\Console\Commands\Veflo;

use Illuminate\Console\Command;
use App\Veflo\Engine\Factory\GeneratorFactory;

class MakeModuleCommand extends Command
{
    /**
     * Command Signature
     */
    protected $signature = 'veflo:make-module {name}';

    /**
     * Command Description
     */
    protected $description = 'Create a new VEFLO Module';

    /**
     * Execute
     */
    public function handle()
    {
        $name = $this->argument('name');

        $generator = GeneratorFactory::make(
            'module',
            $name
        );

        $generator->generate();

        $this->info("Module {$name} created successfully.");

        return self::SUCCESS;
    }
}