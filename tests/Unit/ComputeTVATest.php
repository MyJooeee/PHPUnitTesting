<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Services\ComputeTVA;

class ComputeTVATest extends TestCase
{

    /** @var Service **/
    protected $instance;

    /**
     * Initialization
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->instance = new ComputeTVA();
    }

    // TODO : Ecrire les tests unitaires avec ces 3 jeux de tests :
    // #1 : $name = 'a hamburger', $type = 'product', $price = 6 ;
    // #2 : $name = 'a hair care', $type = 'service', $price = 19 ;
    // #3 : $name = 'an unicorn', $type = 'surprise', $price = 1000000

    // À vous de jouer !
}
