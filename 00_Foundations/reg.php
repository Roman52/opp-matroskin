<?php 
************************
*     МОДИФИКАТОРЫ     *
************************
"g" - найти все совпадения
"i" - регистронезависимость шаблона
"s" - включая переносы строки



************************
*     МЕТАСИМВОЛЫ      *
************************
"." - точка соответствует любому символу, кроме перевода строки... внутри символьного класса трактуется как литерал

"\" - обратный слеш производит операцию экранирования метасимвола, следующего непосредственно за ним, тем самым последуюший метасимвол трактуется как литерал. Примеры: "." (совпадение с любым символом), "\." (совпадаение только с точкой)

"[" - символ, открывающий символьный класс... если нужен в качестве литерала, то его необходимо экранировать

"]" - является метасимволом при наличии слева открывающей квадратной скобки... иначе - литерал, не требующий обязательного экранирования

"-" - в символьном классе между двумя символами (кроме символов символьного класса) является метасимволом и задает дипазон символов... иначе - литерал.

"^" - циркумфлекс, крышка. В начале символьного класса обозначает метасимвол отрицания, отрицающий все символы, указанные в символьном классе: "[^abc0-5]" - не "a", не "b", не "c" и не цифры от "0" до "5"... в любой другой позиции символьного класса циркумлекс будет литералом.

"\t" - метасимвол табуляции

"\r" - возврат каретки

"\n" - новая строка



************************
*  Символьные классы   *
************************
"[abc]" - любой один символ из трех указанных: или "a", или "b", или "c"

"[a-f]" - символы в диапазоне от "a" до "f" (a,b,c,d,e,f)

"[0-9]" - цифры от "0" до "9" (0,1,2,3,4,5,6,7,8,9)


*************************************
*  Метасимволы символьных классов   *
*************************************
\d - [0-9], цифры
\D - [^0-9], кроме цифр
\w - [a-zA-Z0-9_], буквенно-цифровые символы и подчеркивание
\W - [^a-zA-Z0-9_], кроме буквенно-цифровых символов и подчеркивания
\s - [\r\n\t\f\v (пробел)], пробельные символы
\S - [^\r\n\t\f\v (пробел)], кроме пробельных символов


******************************
*  Символьные классы POSIX   *
******************************
[[:digit:]] - \d, [0-9]
[[:alnum:]] - [a-zA-Z0-9]
[[:alpha:]] - [a-zA-Z]
[[:blank:]] - пробел и табуляция
[[:lower:]] - [a-z]
[[:upper:]] - [A-Z]
[[:space:]] - \s
[[:xdigit:]] - [a-fA-F0-9]



************************
*    КВАНТИФИКАТОРЫ    *
************************
"+" - одно или более вхождений предшествующего элемента || min:1, max:не ограничено. Жадный квантификатор.
"*" - любое количество вхождений предшествующего элемента || min:0, max:не ограничено. Жадный квантификатор.
"?" - указывает на необязательность предшествующего элемента || min:0, max:1. Жадный квантификатор.
"{min,max}" - задает количество вхождений от значения min до значения max
"{min,}" - задает количество вхождений от значения min до бесконечности
"{точное количество}" - задает точное количество вхождений
Квантификаторы по умолчанию являются жадными, т.е. захватывают как можно больше вхождений. Добавляя к квантификатору знак вопроса, мы делаем его ленивым, т.е. заставляем искать как можно меньше вхождений.
"+?" - ленивый квантификатор
"*?" - ленивый квантификатор
"??" - ленивый квантификатор
?>