<?php

namespace App\Console\Commands\Veflo;

use Illuminate\Console\Command;
use App\Veflo\Engine\Factory\GeneratorFactory;

class MakePageCommand extends Command
{
    /**
     * Command Signature
     */
    protected $signature = 'veflo:make-page {name}';

    /**
     * Command Description
     */
    protected $description = 'Create a new VEFLO Page';

    /**
     * Execute Command
     */
    public function handle()
    {
        $name = $this->argument('name');

        $generator = GeneratorFactory::make(
            'page',
            $name
        );

        $generator->generate();

        $this->info("Page {$name} created successfully.");

        return self::SUCCESS;
    }
}