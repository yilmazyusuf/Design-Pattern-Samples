<?php

namespace Behavioral\ChainOfResponsibilities\Php\Shopping\Responsibles;

use Behavioral\ChainOfResponsibilities\Php\Shopping\Handler;
use Behavioral\ChainOfResponsibilities\Php\Shopping\Request;

class A101 extends Handler implements iShopFeatures
{

    protected function process(Request $request): bool
    {

        return $this->checkContracts($request);
    }
    public function getName(): string
    {
        return 'A101';
    }

    public function getClosingTime(): int
    {
        return 19;
    }

    public function getDistanceToHome(): int
    {
        return 100;
    }

    public function getHasCreditCardPos(): bool
    {
        return false;
    }

    public function getSellOnCredit(): bool
    {
        return false;
    }

    public function getBreadPrice(): float
    {
        return 1.0;
    }
}