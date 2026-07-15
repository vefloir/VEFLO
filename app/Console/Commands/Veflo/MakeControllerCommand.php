<?php

namespace App\Console\Commands\Veflo;

use Illuminate\Console\Command;
use App\Veflo\Engine\Factory\GeneratorFactory;

class MakeControllerCommand extends Command
{
    protected $signature = 'veflo:make-controller {name}';

    protected $description = 'Create a new VEFLO Controller';

    public function handle()
    {
        $name = $this->argument('name');

        $generator = GeneratorFactory::make(
            'controller',
            $name
        );

        $generator->generate();

        $this->info("Controller {$name} created successfully.");

        return self::SUCCESS;
    }
}