<?php

namespace App\Console\Commands\Veflo;

use Illuminate\Console\Command;
use App\Veflo\Engine\Factory\GeneratorFactory;

class MakeServiceCommand extends Command
{
    /**
     * Signature
     */
    protected $signature = 'veflo:make-service {name}';

    /**
     * Description
     */
    protected $description = 'Create a new VEFLO Service';

    /**
     * Execute
     */
    public function handle()
    {
        $name = $this->argument('name');

        $generator = GeneratorFactory::make(
            'service',
            $name
        );

        $generator->generate();

        $this->info("Service {$name} created successfully.");

        return self::SUCCESS;
    }
}