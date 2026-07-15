<?php

namespace App\Veflo\Engine\Factory;

use InvalidArgumentException;

use App\Veflo\Engine\Contracts\GeneratorInterface;

use App\Veflo\Engine\Generators\ModuleGenerator;
use App\Veflo\Engine\Generators\PageGenerator;
use App\Veflo\Engine\Generators\ComponentGenerator;
use App\Veflo\Engine\Generators\WidgetGenerator;
use App\Veflo\Engine\Generators\LayoutGenerator;
use App\Veflo\Engine\Generators\ServiceGenerator;
use App\Veflo\Engine\Generators\ControllerGenerator;

class GeneratorFactory
{
    public static function make(
        string $type,
        string $name
    ): GeneratorInterface
    {
        return match ($type) {

            'module'     => new ModuleGenerator($name),

            'page'       => new PageGenerator($name),

            'component'  => new ComponentGenerator($name),

            'widget'     => new WidgetGenerator($name),

            'layout'     => new LayoutGenerator($name),

            'service'    => new ServiceGenerator($name),

            'controller' => new ControllerGenerator($name),

            default => throw new InvalidArgumentException(
                "Unknown generator type: {$type}"
            ),
        };
    }
}