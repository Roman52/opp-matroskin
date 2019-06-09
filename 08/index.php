<?php 

/*
Родительский класс называют также суперкласс

Наследование - механизм, по средствам которого один или несколько классов можно получить из некоторого базового класса (общего для всех продуктов - в данном примере - class Product)

Мы можем описать некий базовый класс, который будет содержать некую общюю логику, общие свойства, методы, а все остальные классы мы можем наследовать от этого базового класса. Соответственно мы устанавливаем некую связь родительский/дочерний класс. 
В дочернем классе мы можем добавлять новую функциональность для родительского (это называется расширять или наследовать родительский класс).
*/

error_reporting(-1);

require_once 'classes/Product.php';
require_once 'classes/LaptopProduct.php';
require_once 'classes/BookProduct.php';

$book = new BookProduct('Brave new world', 100, '333 страницы');
$laptop = new LaptopProduct('Apple', 3000, 'core i7');

echo '<pre>';
print_r($book);
echo '</pre>';

echo '<pre>';
print_r($laptop);
echo '</pre>';

echo $book->getProduct();
echo $laptop->getProduct();