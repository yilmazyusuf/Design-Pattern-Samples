<?php

namespace Behavioral\ChainOfResponsibilities\Php\Cache\Responsibles;

use Behavioral\ChainOfResponsibilities\Php\Cache\Handler;

class MemCache extends Handler
{


    protected function process($request): bool
    {
        if ($request === 'memcache') {
            return true;
        }
        return false;
    }
}