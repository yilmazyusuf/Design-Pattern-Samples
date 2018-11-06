<?php

namespace Behavioral\ChainOfResponsibilities\Php\Shopping\Responsibles;

use Behavioral\ChainOfResponsibilities\Php\Shopping\Handler;
use Behavioral\ChainOfResponsibilities\Php\Shopping\Request;

class Bim extends Handler implements iShopFeatures
{

    protected function process(Request $request): bool
    {
        return $this->checkContracts($request);
    }

    public function getName(): string
    {
        return 'BIM';
    }

    public function getClosingTime(): int
    {
        return 20;
    }

    public function getDistanceToHome(): int
    {
        return 150;
    }

    public function getHasCreditCardPos(): bool
    {
        return true;
    }

    public function getSellOnCredit(): bool
    {
        return false;
    }

    public function getBreadPrice(): float
    {
        return 1.5;
    }
}