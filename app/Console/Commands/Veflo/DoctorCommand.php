<?php

namespace App\Console\Commands\Veflo;

use Illuminate\Console\Command;

class DoctorCommand extends Command
{
    /**
     * Signature
     */
    protected $signature = 'veflo:doctor';

    /**
     * Description
     */
    protected $description = 'Check VEFLO Framework health';

    /**
     * Execute
     */
    public function handle()
    {
        $checks = [

            'Configuration'        => file_exists(config_path('veflo.php')),

            'Version Manager'      => file_exists(app_path('Veflo/version.json')),

            'Generator Factory'    => file_exists(app_path('Veflo/Engine/Factory/GeneratorFactory.php')),

            'Module Generator'     => file_exists(app_path('Veflo/Engine/Generators/ModuleGenerator.php')),

            'Page Generator'       => file_exists(app_path('Veflo/Engine/Generators/PageGenerator.php')),

            'Component Generator'  => file_exists(app_path('Veflo/Engine/Generators/ComponentGenerator.php')),

            'Widget Generator'     => file_exists(app_path('Veflo/Engine/Generators/WidgetGenerator.php')),

            'Layout Generator'     => file_exists(app_path('Veflo/Engine/Generators/LayoutGenerator.php')),

            'Service Generator'    => file_exists(app_path('Veflo/Engine/Generators/ServiceGenerator.php')),

            'Controller Generator' => file_exists(app_path('Veflo/Engine/Generators/ControllerGenerator.php')),

        ];

        $this->newLine();

        $this->info('===============================');
        $this->info(' VEFLO FRAMEWORK HEALTH REPORT ');
        $this->info('===============================');

        $healthy = true;

        foreach ($checks as $name => $result) {

            if ($result) {

                $this->line(sprintf(
                    " %-24s ✔",
                    $name
                ));

            } else {

                $healthy = false;

                $this->line(sprintf(
                    " %-24s ✘",
                    $name
                ));
            }
        }

        $this->newLine();

        if ($healthy) {

            $this->info('Framework Status : HEALTHY');

        } else {

            $this->error('Framework Status : PROBLEMS FOUND');

        }

        $this->newLine();

        return self::SUCCESS;
    }
}