<?php

namespace Behavioral\ChainOfResponsibilities\Php\Shopping;

class Request
{


    private $currentTime;
    private $papasMoney;
    private $papaIsTired;
    private $papaHasCreditCartLimit;

    /**
     * @return int
     */
    public function getCurrentTime() :int
    {
        return $this->currentTime;
    }

    /**
     * @param int $currentTime
     * @return Request
     */
    public function setCurrentTime($currentTime): Request
    {
        $this->currentTime = $currentTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getPapasMoney() :int
    {
        return $this->papasMoney;
    }

    /**
     * @param int $papasMoney
     * @return Request
     */
    public function setPapasMoney($papasMoney): Request
    {
        $this->papasMoney = $papasMoney;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPapaIsTired() :bool
    {
        return $this->papaIsTired;
    }

    /**
     * @param bool $papaIsTired
     * @return Request
     */
    public function setPapaIsTired($papaIsTired): Request
    {
        $this->papaIsTired = $papaIsTired;
        return $this;
    }

    /**
     * @return Int
     */
    public function getPapaHasCreditCartLimit(): Int
    {
        return $this->papaHasCreditCartLimit;
    }

    /**
     * @param bool $papaHasCreditCartLimit
     * @return Request
     */
    public function setPapaHasCreditCartLimit($papaHasCreditCartLimit): Request
    {
        $this->papaHasCreditCartLimit = $papaHasCreditCartLimit;

        return $this;
    }

}