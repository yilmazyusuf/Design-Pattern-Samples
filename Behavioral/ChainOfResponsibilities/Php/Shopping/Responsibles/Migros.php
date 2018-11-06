<?php

namespace Behavioral\ChainOfResponsibilities\Php\Shopping\Responsibles;


use Behavioral\ChainOfResponsibilities\Php\Shopping\Handler;
use Behavioral\ChainOfResponsibilities\Php\Shopping\Request;

class Migros extends Handler implements iShopFeatures
{

    protected function process(Request $request): bool
    {
        return $this->checkContracts($request);
    }
    public function getName(): string
    {
        return 'Migros';
    }

    public function getClosingTime(): int
    {
        return 21;
    }

    public function getDistanceToHome(): int
    {
        return 200;
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
        return 3.0;
    }
}