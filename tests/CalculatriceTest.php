<?php
namespace Test;

use App\Calculatrice;

class CalculatriceTest extends \PHPUnit\Framework\TestCase
{
    public $a = 5;
    public $b = 12;

    public function testAdd()
    {
        $toto = Calculatrice::add($this->a, $this->b);
        $this->assertEquals($this->a+$this->b, $toto, "Ca passe pas");
    }

}