<?php

namespace App\Console\Commands\Veflo;

use Illuminate\Console\Command;
use App\Veflo\Engine\Factory\GeneratorFactory;

class MakeWidgetCommand extends Command
{
    /**
     * Command Signature
     */
    protected $signature = 'veflo:make-widget {name}';

    /**
     * Command Description
     */
    protected $description = 'Create a new VEFLO Widget';

    /**
     * Execute Command
     */
    public function handle()
    {
        $name = $this->argument('name');

        $generator = GeneratorFactory::make(
            'widget',
            $name
        );

        $generator->generate();

        $this->info("Widget {$name} created successfully.");

        return self::SUCCESS;
    }
}