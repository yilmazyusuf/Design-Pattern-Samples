<?php

namespace Behavioral\ChainOfResponsibilities\Php\Cache;

abstract class Handler
{
    /**
     * @var Handler
     */
    private $successor = false;

    public function setSuccessor(Handler $handler)
    {
        if ($this->successor === false) {
            $this->successor = $handler;
        } else {
            $this->successor->setSuccessor($handler);
        }
    }

    final public function handle($request): bool
    {
        $response = $this->process($request);
        if (($response === false) && ($this->successor !== false)) {
            $response = $this->successor->handle($request);
        }

        return $response;
    }

    abstract protected function process($request): bool;

}