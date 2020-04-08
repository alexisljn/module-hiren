<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPUnit\Framework\TestCase;
require('vendor/autoload.php');


class Calculatrice
{

	public static function add($a, $b)
	{
		return $a + $b;
	}

	public static function minus($a, $b)
	{
		return $a - $b;
	}

	public static function multiply($a, $b)
	{
		return $a * $b;
	}

	public static function division($a, $b)
	{
		if($b === 0) {
			die;
		}
		
		return $a / $b;
	}
}


class CalculatriceTest extends TestCase
{
	public function testAdd()
	{
		$a = 12;
		$b = 5;
		$toto = Calculatrice::add($a, $b);
		$this->assertEquals($toto, $a+$b);
	}

}
$calc = new CalculatriceTest();
$calc->testAdd();