<?php

namespace App\Console\Commands\Veflo;

use Illuminate\Console\Command;

class AboutCommand extends Command
{
    /**
     * Signature
     */
    protected $signature = 'veflo:about';

    /**
     * Description
     */
    protected $description = 'Display VEFLO Framework information';

    /**
     * Execute
     */
    public function handle()
    {
        $config = config('veflo');

        $this->newLine();

        $this->info('===============================');
        $this->info('      VEFLO FRAMEWORK');
        $this->info('===============================');

        $this->newLine();

        $this->line('Name      : '.$config['name']);
        $this->line('Version   : '.$config['version']);
        $this->line('Status    : '.$config['status']);
        $this->line('Author    : '.$config['author']);
        $this->line('Website   : '.$config['website']);

        $this->newLine();

        $this->info('Installed Generators');

        foreach ($config['engine'] as $generator => $enabled) {

            $status = $enabled ? '✔' : '✘';

            $this->line(sprintf(
                " %-14s %s",
                ucfirst($generator),
                $status
            ));

        }

        $this->newLine();

        return self::SUCCESS;
    }
}