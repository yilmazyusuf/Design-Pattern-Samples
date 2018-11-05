<?php

namespace Behavioral\ChainOfResponsibilities\Php\Cache\Responsibles;

use Behavioral\ChainOfResponsibilities\Php\Cache\Handler;

class Mysql extends Handler
{


    protected function process($request): bool
    {
        if ($request === 'mysql') {
            return true;
        }
        return false;
    }
}