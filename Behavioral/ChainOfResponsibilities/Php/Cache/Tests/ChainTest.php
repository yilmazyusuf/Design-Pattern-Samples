<?php

namespace Behavioral\ChainOfResponsibilities\Php\Cache\Tests;

use Behavioral\ChainOfResponsibilities\Php\Cache\ChainClient;
use Behavioral\ChainOfResponsibilities\Php\Cache\Responsibles\MemCache;
use Behavioral\ChainOfResponsibilities\Php\Cache\Responsibles\Mysql;
use Behavioral\ChainOfResponsibilities\Php\Cache\Responsibles\Redis;
use Behavioral\ChainOfResponsibilities\Php\Cache\Responsibles\Solr;
use PHPUnit\Framework\TestCase;

class ChainTest extends TestCase
{


    public function testCanReadCacheFromMysql()
    {


        $memcache = new MemCache();
        $redis = new Redis();
        $solr = new Solr();
        $mysql = new Mysql();

        $memcache->setSuccessor($redis);
        $redis->setSuccessor($solr);
        $solr->setSuccessor($mysql);

        $this->assertTrue($memcache->handle('mysql'));

    }


    public function testCanOrderChains()
    {

        $chains = [
            new Mysql(),
            new MemCache(),
            new Redis(),
            new Solr()
        ];

        $chainClient = new ChainClient();
        $this->assertTrue($result = $chainClient->handle($chains, 'solr'));

    }


}

