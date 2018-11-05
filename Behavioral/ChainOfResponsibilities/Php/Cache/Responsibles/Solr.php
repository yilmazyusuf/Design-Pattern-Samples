<?php

namespace Behavioral\ChainOfResponsibilities\Php\Cache\Responsibles;

use Behavioral\ChainOfResponsibilities\Php\Cache\Handler;

class Solr extends Handler
{

    protected function process($request): bool
    {
        if ($request === 'solr') {
            return true;
        }
        return false;
    }
}