<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	<style>
		h2 {
			margin-bottom: 2px;
			
		background-color: #b8b2b2;
		}
		h4 {
			margin-bottom: 5px;
			margin-top: 5px;
			background-color: #d9d4d4;
		}
		p {
			
			font-size: 20px;
			margin-bottom: 5px;
			margin-top: 5px;
		}
	</style>
	
	</head>
	<body>
		<div>
			<h2>Задание 1.</h2>
				<h4>
				Создайте переменные $a=10 и $b=2. Выведите на экран их сумму, разность, произведение и частное.
				</h4>
			<?php
				$a=10;
				$b=2;
				echo '<p>Cумма - ', $a +  $b, ';</p>';
				echo '<p>Pазность - ', $a - $b, ';</p>'; 
				echo '<p>Произведение - ', $a * $b, ';</p>'; 
				echo '<p>Частное - ', $a / $b, '.</p>';
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 2.</h2>
				<h4>
				Даны три числа x = 2,y = 6 и z = 9. Найдите (x+1)4-2(z-2x^2+y^2).
				</h4>
			<?php
				$x = 2;
				$y = 6;
				$z = 9;
				echo '<p>Значение выражения: ', ($x + 1) * 4 - 2 * ($z - 2 * $x ** 2 + $y ** 2), '</p>';
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 3.</h2>
				<h4>
				Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и результат присвойте переменной $c.<br/>Затем создайте переменную $d, присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите<br/>в переменную $result. Выведите на экран значение переменной $result.
				</h4>
			<?php
				$a = 17;
				$b = 10;
				$c = $a - $b;
				$d = 7;
				$result = $c + $d;
				echo '<p>Значение переменной: ', $result, '</p>';
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 4.</h2>
				<h4>
				Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих переменных и операции сложения строк выведите на экран фразу 'Привет, Мир!'.
				</h4>
			<?php
				$text1 ='Привет, ';
				$text2 ='Мир!';
				echo '<p>' . $text1 . $text2 . '</p>';
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 5.</h2>
				<h4>
				Создайте переменную $name и присвойте ей ваше имя. Выведите на экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя.
				</h4>
			<?php
				$name = 'Сергей';
				echo "<p>{$text1}{$name}!</p>";
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 6.</h2>
				<h4>
				Создайте переменную $num и присвойте ей значение '12345'. Найдите сумму цифр этого числа.
				</h4>
			<?php
				$num = '12345';
				var_dump($num);
				$sum = $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
				echo '<p>Сумма цифр = ' . $sum . '</p>';
				var_dump($sum);
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 7.</h2>
				<h4>
				Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце, в году и сколько прошло секунд с начала 2000 года.
				</h4>
			<?php
				$secondsMinute = 60;
				$secondsHour = $secondsMinute * 60;
				$secondsDay = $secondsHour * 24;
				$secondsMonth = $secondsDay * 30;
				$secondsYear = $secondsMonth * 12;
				echo "<p>В часе {$secondsHour} секунд,<br>в сутках {$secondsDay} секунд,<br> в месяце {$secondsMonth} секунд,<br> в году {$secondsYear} секунд.</p>";
				$time = date('y') * $secondsYear + date('m') * $secondsMonth + date('j') * $secondsDay + date('H') * $secondsHour + date('i') * $secondsMinute + date('s');
				echo "<p>С начала 2000 года прошло {$time} секунд.</p>";
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 8.</h2>
				<h4>
				Создайте три переменные - час, минута, секунда. С их помощью выведите текущее время в формате 'час:минута:секунда'.
				</h4>
			<?php
				$hour = date('H');
				$minute = date('i');
				$second = date('s');
				echo "<p>Текущее время - {$hour}:{$minute}:{$second}</p>";
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 9.</h2>
				<h4>
				Переделайте приведенный код так, чтобы в нем использовались операции +=, -=, *=, /=, ++, --. Количество строк кода при этом не должно измениться.
				</h4>
			<?php
				$var = 1;
				$var = $var + 12;
				$var = $var - 14;
				$var = $var * 5;
				$var = $var / 7;
				$var = $var + 1;
				$var = $var - 1;
				echo '<p>Результат вычисления задания = ' . $var . '</p>';
				
				echo '<p> Переделанный код: <br />
				$var = 1;<br />
				$var += 12;<br />
				$var -= 14;<br />
				$var *= 5;<br />
				$var /= 7;<br />
				$var++;<br />
				$var--.
				</p>';
				$var = 1;
				$var += 12;
				$var -= 14;
				$var *= 5;
				$var /= 7;
				$var++;
				$var--;
				echo '<p>Результат вычисления переделанного кода = ' . $var . '</p>';
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 10.</h2>
				<h4>
				Создайте константу и присвойте ей значение - ваша фамилия, создайте соответствующие переменные со сл. значениями: ваше имя, ваше отчество, ваш возраст. Проверьте существует ли созданная константа, если да, то выведите фразу "Меня зовут <ваша фамилия> (сокр. <ваше имя> и сокр. ваше отчество). Мне <ваш возраст> лет". Каждая фраза должна начинаться с новой строки..
				</h4>
			<?php
				define('SURNAME', 'Мильгуй');
				$name = 'Сергей';
				$patronymic = 'Александрович';
				$age = 52;
				if (defined('SURNAME') === false){
					echo '<p>Такой константы несуществует</p>';
				} else {
					echo '<p>Меня зовут '. SURNAME . ' ' . mb_substr($name, 0, 1) . '. ' . mb_substr($patronymic, 0, 1) . '.</p>';
					echo "<p>Мне {$age} года.</p>";
				}
			?>
		</div>
	</body>
</html>