<?php

namespace App\Console\Commands\Veflo;

use Illuminate\Console\Command;
use App\Veflo\Engine\Factory\GeneratorFactory;

class MakeLayoutCommand extends Command
{
    /**
     * Command Signature
     */
    protected $signature = 'veflo:make-layout {name}';

    /**
     * Command Description
     */
    protected $description = 'Create a new VEFLO Layout';

    /**
     * Execute Command
     */
    public function handle()
    {
        $name = $this->argument('name');

        $generator = GeneratorFactory::make(
            'layout',
            $name
        );

        $generator->generate();

        $this->info("Layout {$name} created successfully.");

        return self::SUCCESS;
    }
}