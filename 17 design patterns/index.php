<?php 
/*
Урок № 17 Паттерны/шаблоны проектирования. Паттерн - шаблон разработки. Эти паттерны могут использоваться и в других объектно ориентированных языках программирования. Это алгоритмы/руководства/решения/инструкции для возникающих задач. Определенный шаблон проектирования поможет решить вам определенную задачу и пытаться засовывать их где они не нужны не нужно.

Мы рассмотрим один шаблон Singletone для практики и тк он самый простой.

 Представим, что нам необходима работа с бд. У нас есть класс для работы с бд. От класса мы можем создавать объекты. Когда мы работаем с этим классом, в конструкторе мы можем устанавливать соединение с бд. Что произойдет, если создать 2 объекта этого класса в теории это возможно, когда большое приложение, много файлов папок, можно забыть и создать еще одно\несколько объектов - а значит и несколько соединений с бд, когда оно уже было открыто. Это очень плохо. Перед нами стоит задача как то контролировать создан ли объект класса db например и не открыто ли уже было соединение. Для этого как раз и существует паттерн Singletone.
 Это просто по сути кусок кода с готовым решением для этой конкретной задачи.

*/

use rz_core\interfaces\IGadget;
use app\BookProduct;
use app\LaptopProduct;

error_reporting(-1);

require_once __DIR__ . '/vendor/autoload.php';


function offerCase(IGadget $product) {
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

$book = new \app\BookProduct('Brave new world', 170, '200 страниц');
$laptop = new LaptopProduct('Macbook', '100000', 'core i7');

$a1 = app\A::getInstanse();
$a2 = app\A::getInstanse();
var_dump($a1);
echo '<br>';
var_dump($a2);
echo '<br>';

$b1 = app\B::getInstanse();
$b2 = app\B::getInstanse();

var_dump($b1);
echo '<br>';
var_dump($b2);
echo '<br>';
