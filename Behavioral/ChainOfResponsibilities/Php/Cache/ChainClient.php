<?php

namespace Behavioral\ChainOfResponsibilities\Php\Cache;

class ChainClient
{


    public function handle($chains, $request): bool
    {

        if (count($chains) < 2) {
            throw new \Exception('Successors must conatin mimium 2 Chain');
        }

        for ($c = 0; $c < count($chains); $c++) {
            if ($c < count($chains) - 1) {
                $currentChain = $chains[$c];
                $nextChain = $chains[($c + 1)];
                $currentChain->setSuccessor($nextChain);
            }


        }
        $result = $chains[0]->handle($request);
        return $result;
    }


}