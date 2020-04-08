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

    public function testMinus()
    {
        $toto = Calculatrice::minus($this->a, $this->b);
        $this->assertEquals($this->a-$this->b, $toto, "ca passe pas");
    }

    public function testMultiply()
    {
        $toto = Calculatrice::multiply($this->a, $this->b);
        $this->assertEquals($this->a*$this->b, $toto, 'Ca ne passe pas');
    }

    public function testDivision()
    {
        $toto = Calculatrice::division($this->a, $this->b);
        $this->assertEquals($this->a / $this->b, $toto, "Ca passe pas Emile !!!!!");
    }


}