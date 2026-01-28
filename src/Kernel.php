<?php

namespace App;

use App\Trait\TimeZoneTrait;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;
    use TimeZoneTrait;

    public function __construct(string $environment, bool $debug)
    {
        
        $this->changeTimeZone(isset($_ENV['APP_TIME_ZONE']) ? $_ENV['APP_TIME_ZONE'] : "Europe/Paris");

        return parent::__construct($environment, $debug);
    }
}
