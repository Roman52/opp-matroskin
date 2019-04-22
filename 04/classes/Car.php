<?php 
/*
метод __construct всегда вызывается (если он описан в классе) при создании нового экземпляра класса.
Все что мы передадим в круглых скобках при создании класса попадет в метод construct.

Метод __destruct срабатывает уничтожении объекта (когда объект удаляется из памяти). Порядок удаления объектов не определен. Используется крайне редко


Как они могут использоваться например.
При работе с бд. В construct открываем соединение в destruct закрываем. (Хотя закрывать соединение с бд - не обязательно, php делает это автоматически)

__construct и __destruct - пишем в начале класса всегда

*/

class Car
{
	//определяем свойства класса
	public $color;
	public $wheels;
	public $speed = 180;
	public $brand; 

	public function __construct($color, $wheels = 4, $speed, $brand) {
		$this->color = $color;
		$this->wheels = $wheels;
		$this->speed = $speed;
		$this->brand = $brand;
	}

	//определяем метод класса
	public function getCarInfo() {
		return "<h3>О моем авто</h3>
		Марка: {$this->brand} <br>
		Цвет: {$this->color} <br>
		Кол во колес: {$this->wheels} <br>
		Скорость: {$this->speed} <br>
		";
	}

	/*
	каверзный вопрос - можно ла разрывать тело класса? - Да можно
	*/
	public function getText() {
		?>
		<h2>Hello, world!</h2>
		<?php
	}

 	public function __destruct() {
		echo '<pre>';
		print_r($this);
		echo '</pre>';
	}
}
