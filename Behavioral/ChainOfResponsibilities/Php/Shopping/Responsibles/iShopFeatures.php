<?php

namespace Behavioral\ChainOfResponsibilities\Php\Shopping\Responsibles;


interface iShopFeatures
{

    public function getClosingTime(): int;

    public function getDistanceToHome(): int;

    public function getHasCreditCardPos(): bool;

    public function getSellOnCredit(): bool;

    public function getBreadPrice(): float;

    public function getName(): string;


}