<?php

use App\Calculadora\Calculadora;
use App\Calculadora\Excepciones\DivisionPorCeroException;
use App\Calculadora\Excepciones\ArregloException;


class CalculadoraTest extends \PHPUnit\Framework\TestCase {

	/** @test **/
	public function SumarDosNumeros() {
		$calculadora = new Calculadora;

		$suma = $calculadora->sumar(5, 11);

		$this->assertEquals(16, $suma);
	}

	/** @test **/
	public function sumarArreglo() {
		$calculadora = new Calculadora;

		$suma = $calculadora->sumarArreglo([8, 2, 7, 3]);

		$this->assertEquals(20, $suma);
	}

	/** @test **/
	public function dividirDosNumeros() {
		$calculadora = new Calculadora;

		$division = $calculadora->dividir(10, 2);

		$this->assertEquals(5, $division);
	}

	/** @test **/
	public function dividirEntreCero() {

		$this->expectException(DivisionPorCeroException::class);

		$calculadora = new Calculadora;

		$division = $calculadora->dividir(10, 0);		
	}

	/** @test **/
	public function sumarArregloConParametro() {
		$this->expectException(ArregloException::class);		

		$calculadora = new Calculadora;

		$suma = $calculadora->sumarArreglo(5);

	}
}