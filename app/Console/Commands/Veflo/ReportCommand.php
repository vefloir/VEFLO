<?php

namespace App\Console\Commands\Veflo;

use Illuminate\Console\Command;

class ReportCommand extends Command
{
    /**
     * Signature
     */
    protected $signature = 'veflo:report';

    /**
     * Description
     */
    protected $description = 'Display VEFLO Framework project report';

    public function handle()
    {
        $report = [

            'Modules' => is_dir(base_path('Modules'))
                ? count(glob(base_path('Modules/*'), GLOB_ONLYDIR))
                : 0,

            'Pages' => count(glob(resource_path('views/*'), GLOB_ONLYDIR)),

            'Components' => count(glob(resource_path('views/components/ui/*.blade.php'))),

            'Widgets' => count(glob(resource_path('views/widgets/*.blade.php'))),

            'Layouts' => count(glob(resource_path('views/layouts/*.blade.php'))),

            'Services' => count(glob(app_path('Services/*.php'))),

            'Controllers' => count(glob(app_path('Http/Controllers/*Controller.php'))),

        ];

        $this->newLine();

        $this->info('===============================');
        $this->info('     VEFLO FRAMEWORK REPORT');
        $this->info('===============================');

        $this->newLine();

        foreach ($report as $title => $value) {

            $this->line(sprintf(
                " %-15s %d",
                $title,
                $value
            ));

        }

        $this->newLine();

        return self::SUCCESS;
    }
}