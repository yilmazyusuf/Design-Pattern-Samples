<?php

namespace Behavioral\ChainOfResponsibilities\Php\Shopping\Responsibles;

use Behavioral\ChainOfResponsibilities\Php\Shopping\Handler;
use Behavioral\ChainOfResponsibilities\Php\Shopping\Request;

class Grocer extends Handler implements iShopFeatures
{

    protected function process(Request $request): bool
    {
        return $this->checkContracts($request);
    }


    public function getName(): string
    {
        return 'Grocer';
    }

    public function getClosingTime(): int
    {
        return 20;
    }

    public function getDistanceToHome(): int
    {
        return 10;
    }

    public function getHasCreditCardPos(): bool
    {
        return false;
    }

    public function getSellOnCredit(): bool
    {
        return true;
    }

    public function getBreadPrice(): float
    {
        return 2.0;
    }
}