<?php

namespace Behavioral\ChainOfResponsibilities\Php\Shopping\Tests;

use Behavioral\ChainOfResponsibilities\Php\Shopping\Request;
use Behavioral\ChainOfResponsibilities\Php\Shopping\Responsibles\A101;
use Behavioral\ChainOfResponsibilities\Php\Shopping\Responsibles\Bim;
use Behavioral\ChainOfResponsibilities\Php\Shopping\Responsibles\Grocer;
use Behavioral\ChainOfResponsibilities\Php\Shopping\Responsibles\Migros;
use PHPUnit\Framework\TestCase;

class ShopTest extends TestCase
{


    private $a101;
    private $bim;
    private $migros;
    private $grocer;

    public function setUp()
    {
        $this->a101 = new A101();
        $this->bim = new Bim();
        $this->migros = new Migros();
        $this->grocer = new Grocer();

        $this->a101->setSuccessor($this->bim);
        $this->bim->setSuccessor($this->migros);
        $this->migros->setSuccessor($this->grocer);

    }

    public function testPapaCanBuyBread()
    {


        $request = new Request();
        $request->setCurrentTime(18)
            ->setPapaHasCreditCartLimit(false)
            ->setPapaIsTired(false)
            ->setPapasMoney(1);

        $papaBoughtBread = $this->a101->handle($request);


        $this->assertTrue($papaBoughtBread);

    }


}

