<?php 
/*
в классах глобальная область видимости (не как в функциях)
*/
class Car
{
	//определяем свойства класса
	public $color;
	public $wheels = 4;
	public $speed = 180;
	// var $brand; можно иногда встретить - устаревшая фигня = public


	//канкатенацию можно узать в свойствах класса с версии php 5.6
	public $path = __DIR__ . '/test';
}