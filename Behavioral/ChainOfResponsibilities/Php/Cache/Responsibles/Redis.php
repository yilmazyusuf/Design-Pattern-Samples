<?php

namespace Behavioral\ChainOfResponsibilities\Php\Cache\Responsibles;

use Behavioral\ChainOfResponsibilities\Php\Cache\Handler;

class Redis extends Handler
{


    protected function process($request): bool
    {
        if ($request === 'redis') {
            return true;
        }
        return false;
    }
}