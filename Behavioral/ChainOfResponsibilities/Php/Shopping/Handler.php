<?php

namespace Behavioral\ChainOfResponsibilities\Php\Shopping;

use Behavioral\ChainOfResponsibilities\Php\Shopping\Responsibles\iShopFeatures;

abstract class Handler implements iShopFeatures
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

    final public function handle(Request $request): bool
    {

        $response = $this->process($request);

        if($response === true){
            print('Baba '.$this->getName()).' den ekmek alabildi';
        }
        if ($response === false && $this->successor !== false) {
            $response = $this->successor->handle($request);
        }



        return $response;
    }


    final public function checkContracts(Request $request)
    {


        //Shop Is Closed
        if ($request->getCurrentTime() >= $this->getClosingTime()) {
            return false;
        }

        //Papa Is Tired
        if ($request->getPapaIsTired() === true && $this->getDistanceToHome() >= 100) {
            return false;
        }

        //Papa has not enoug money
        if ($request->getPapasMoney() < $this->getBreadPrice()) {

            //Try With Credit Card
            if ($this->getHasCreditCardPos() === false) {

                //Try With Sell On Credit
                if ($this->getSellOnCredit() === false) {
                    return false;
                }

            }

            if ($this->getHasCreditCardPos() === true && $request->getPapaHasCreditCartLimit() === false) {
                return false;
            }

        }

        return true;


    }


    abstract protected function process(Request $request): bool;

}