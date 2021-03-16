<?php
class PruebaTest extends \PHPUnit\Framework\TestCase {

	/** @test **/
	public function test_Suma() {
		$resultado = 2 + 2;
		$this->assertEquals(4, $resultado);
	}

	/** @test **/
	public function test_Resta() {
		$resultado = 9 - 2;
		$this->assertEquals(7, $resultado);
	}
}
