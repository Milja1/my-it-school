<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>hw_lesson_03</title>
		<link rel="stylesheet" href="/css/style.css">
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
		#square {
			margin-bottom: 0px;
			margin-top: 0px;
			height: 15px;
		}
		table{
			border-collapse: collapse;
		}
		td{
			font-size: 25px;
			font-weight: 900;
			border: 1px solid #000000;
			height: 50px;
			width: 50px;
			text-align: center;
		}
		</style>
	</head>
	<body>
		<div>
			<h2>Задание 1.</h2>
				<h4>
				Сделайте функцию, которая возвращает куб числа. Число передается парамером.
				</h4>
			<?php
				function cubeNumbers($number)
				{
					$cube =  $number ** 3;
					echo '<p>Куб числа ' .$number. ' равен ' .$cube. '.</p>';
				}
				cubeNumbers(1);
				cubeNumbers(2);
				cubeNumbers(3);
				cubeNumbers(4);
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 2.</h2>
				<h4>
				Сделайте функцию, которая возвращает сумму двух чисел. Числа передаются параметрами функции.
				</h4>
			<?php
				function sumNumbers($summand1, $summand2)
				{
					$sum = $summand1 +  $summand2;
					echo '<p>Сумма чисел ' .$summand1. ' и '.$summand2. ' равна ' .$sum. '.</p>';
				}
				sumNumbers(1, 2);
				sumNumbers(3, 4);
				sumNumbers(5, 6);
				sumNumbers(7, 8);
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 3.</h2>
				<h4>
				Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке. 
				</h4>
			<?php
				function dayWeek($digit)
				{
					if ($digit > 7 || $digit < 1) {
						echo '<p>Цифра ' .$digit. ' не обозначает день недели.</p>';
					} else {
						switch($digit) {
							case 1: 
								$day = 'понедельник';
								break;
							case 2: 
								$day = 'вторник';
								break;
							case 3: 
								$day = 'среда';
								break;
							case 4: 
								$day = 'четверг';
								break;
							case 5: 
								$day = 'пятница';
								break;
							case 6: 
								$day = 'суббота';
								break;
							case 7: 
								$day = 'воскресенье';
								break;
						}
					echo '<p>Цифрой ' .$digit.  ' обозначен день недели - "' .$day. '".</p>';
					}
				}
				dayWeek(1);
				dayWeek(7);
				dayWeek(6);
				dayWeek(2);
				dayWeek(3);
				dayWeek(5);
				dayWeek(4);
				dayWeek(0);
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 4.</h2>
				<h4>
				Сделайте функцию, которая параметром принимает число и проверяет - отрицательное оно или нет. Если отрицательное - пусть функция вернет true, а если нет - false. 
				</h4>
			<?php
				function negativeNumber($number)
				{
					echo ($number < 0) ? '<p>Число ' .$number. ' отрицательное - "true".</p>'
									   : '<p>Число ' .$number. ' положительное - "false".</p>';
				}
				negativeNumber(5);
				negativeNumber(-100);
				negativeNumber(0);
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 5.</h2>
				<h4>
				Сделайте функцию getDigitsSum (digit - это цифра), которая параметром принимает целое число и возвращает сумму его цифр. 
				</h4>
			<?php
				function getDigitsSum($number)
				{
					$num = (string)$number;
					$result = 0;
					$len = strlen($num);
					for ($i = 0; $i < $len; $i++){
						if ($num[0] !== '-'){
							$result += $num[$i];
						} else {
							$num[0] = 0;
							$result += $num[$i];
						}
					}
					echo "<p>Сумма цифр числа {$number} равна {$result}.</p>";
					return $result;
				}
				getDigitsSum(12);
				getDigitsSum(345);
				getDigitsSum(6789);
				getDigitsSum(-12549723);
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 6.</h2>
				<h4>
				Найдите все года от 1 до 2020, сумма цифр которых равна 13. Для этого используйте вспомогательную функцию getDigitsSum из предыдущей задачи.
				</h4>
			<?php
				function getDigitsSum1($number)
				{
					$num = (string)$number;
					$result = 0;
					$len = strlen($num);
					for ($i = 0; $i < $len; $i++){
						$result += $num[$i];
					}
					return $result;
				}
				
				function periodOurEra($start, $finish)
				{
					$sumDigitsThirteen = '';
					for ($i = $start; $i <= $finish; $i++)
					if (getDigitsSum1($i) == 13)
					$sumDigitsThirteen = $sumDigitsThirteen . $i . ', ';
					echo "<p>Года, сумма цифр которых равна 13:<br> {$sumDigitsThirteen}</p>";
				}
				periodOurEra(1, 2020);
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 7.</h2>
				<h4>
				Сделайте функцию isEven() (even - это четный), которая параметром принимает целое число и проверяет: четное оно или нет. Если четное - пусть функция возвращает true, если нечетное - false.
				</h4>
			<?php
				function isEven($number)
				{
					echo (!($number % 2)) ? '<p>Число ' .$number. ' четное - "true".</p>'
									   	  : '<p>Число ' .$number. ' нечетное - "false".</p>';
				}
				isEven(5);
				isEven(-10);
				isEven(0);
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 8.</h2>
				<h4>
				Сделайте функцию, которая принимает строку на русском языке, а возвращает ее транслит.
				</h4>
			<?php
				function transLit($text) {
					$rusArr = [
						'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 
						'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 
						'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 
						'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 
						'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 
						'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я'
					];
					$transArr = [
						'A', 'B', 'V', 'G', 'D', 'E', 'E', 'G', 'Z', 'I', 'Y', 
						'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 
						'H', 'C', 'Ch', 'Sh', 'Shch', '', 'Y', '', 'E', 'Yu', 'Ya', 
						'a', 'b', 'v', 'g', 'd', 'e', 'e', 'g', 'z', 'i', 'y', 
						'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 
						'h', 'c', 'ch', 'sh', 'shch', '', 'y', '', 'e', 'yu', 'ya'
					];
					$newtext = str_replace($rusArr, $transArr, $text);
					echo "<p>Текст на русском языке '{$text}', в транслитерации выглядит '{$newtext}'.</p>";
				}
				transLit("Хорошо сидим");
				transLit("Далеко глядим");
				transLit("Скоро много узнаем");
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 9.</h2>
				<h4>
				Сделайте функцию, которая возвращает множественное или единственное число существительного. Пример: 1 яблоко, 2 (3, 4) яблока, 5 яблок. Функцияпервым параметром принимает число, а следующие 3 параметра — форма для единственного числа, для чисел два, три, четыре и для чисел, больших четырех, например, func(3, 'яблоко', 'яблока', 'яблок').
				</h4>
			<?php
				function plural($quantity, $piece1, $piece2, $piece3){
					if ($quantity == 1){
						$piece = $piece1;
					} elseif ($quantity > 1 && $quantity <= 4) { 
						$piece = $piece2;
					} else {
						$piece = $piece3;
					}
					echo "<p>У меня есть {$quantity} {$piece}.</p>";
				}
				$quantity = 5;
				plural($quantity, 'яблоко', 'яблока', 'яблок');
				plural($quantity, 'груша', 'груши', 'груш');
				plural($quantity, 'слива', 'сливы', 'слив');
				plural($quantity, 'апельсин', 'апельсина', 'апельсин');
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 10.</h2>
				<h4>
				Дан массив с числами. Выведите последовательно его элементы используя рекурсию и не используя цикл.
				</h4>
			<?php
				function arrayElements($arr, $i = 0)      
				{   
					if ($i <= count($arr)) {
						echo '<p>' . $arr[$i] . '</p>'; 
						$i++;
						arrayElements($arr, $i);
					}									
				}									
				echo '<p>Элементы массива с числами:</p>';
				arrayElements([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]); 
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 11.</h2>
				<h4>
				Дано число. Сложите его цифры. Если сумма получилась более 9-ти, опять сложите его цифры. И так, пока сумма не станет однозначным числом (9 и менее). 
				</h4>
			<?php
				function additionNumbers($number)
				{
					$num = (string)$number;
					$len = strlen($num);
					$sum = 0;
					for ($i = 0; $i < $len; $i++) {
						$sum += $num[$i];
					}
					if ($sum < 10) {
						$sum = $sum;
						$text = 'Выполнение функции завершено.';
					} else {
						additionNumbers($sum);
						$text = 'Продолжаем выполнение функции.';
					}
					echo "<p>Сумма цифр числа '{$number}' после сложения = {$sum}. {$text}</p>";
				}
				additionNumbers(8787878787878);
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 12.</h2>
				<h4>
				Рассчитать скорость движения машины и выведите её в удобочитаемом виде. Осуществить возможность вывода в км/ч, м/c. Представить решение задачи с помощью одной функции.
				</h4>
			<?php
				function machineSpeed($distance, $time = 0.5) {
					$speed_Kmh = $distance / $time;
					$speed_Ms = round($speed_Kmh / 3.6);
					echo "<p>Скорость автомобиля составила {$speed_Kmh} км/ч или примерно {$speed_Ms} м/с.</p>";
				} 
				machineSpeed(20);
				machineSpeed(30);
				machineSpeed(40);
				machineSpeed(50);
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 13.</h2>
				<h4>
				Даны 2 слова, определить можно ли из 1ого слова составить 2ое, при условии что каждую букву из строки 1 можно использовать только один раз.
				</h4>
			<?php
				function characterInformation($word1 = "roboto", $word2 = "oborot"){
					if (count_chars($word1, 0) == count_chars($word2, 0)) {
						echo "<P>Из символов, входящих в слово '{$word1}' можно сложить слово '{$word2}'.</p>";
					} else {
						echo "<P>Из символов, входящих в слово '{$word1}' нельзя сложить слово '{$word2}'.</p>";
					}
				}
				characterInformation();
				characterInformation("ororot");
				characterInformation("нофелет", "телефон");
				characterInformation("нофеноф", "телефон");
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 14.</h2>
				<h4>
				Палиндромом называют последовательность символов, которая читается как слева направо, так и справа налево. Напишите функцию по определению палиндрома по переданному параметру.
				</h4>
			<?php
				function palindrome($word = 'madam'){
					if (strrev($word) == $word) {
						echo "<P>Последовательность символов '{$word}' является палиндромом.</p>";
					} else {
						echo "<P>Последовательность символов '{$word}' не является палиндромом.</p>";
					}
				}
				palindrome();
				palindrome("robot tobor");
				palindrome("pspo topsp");
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 15.</h2>
				<h4>
				Создание функцию создания таблицы умножения в HTML-документе в виде таблицы с использованием соотв. тегов.
				</h4>
			<?php
				function multiplicationTable($start, $finish)
				{
					echo "<p>Таблица умножения от {$start} до {$finish}.</p>";
					echo "<table>";
					for ($i = $start; $i <= $finish; $i++) {
					echo "<tr>";
						for ($j = $start; $j <= $finish; $j++) {
							echo "<td>". $i * $j . "</td>";
						}
					echo "</tr>";
					}
					echo "</table>";
				}
				multiplicationTable(1, 9);
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 16.</h2>
				<h4>
				Дана строка с текстом. Напишите функцию определения самого длинного слова.
				</h4>
			<?php
				function wordLength($str){
					$strArr = explode(" ", $str);
					$longWord = $strArr[0];
					for ($i = 0; $i < count($strArr); $i++){
						if (strlen($strArr[$i]) > strlen($longWord)) {
							$longWord = $strArr[$i];
						} 
					}
					echo "<p>В тексте: <br> {$str}, <br><br> слово '{$longWord}' - первое, имеющее наибольшую длинну.</p><br>";
				}
				wordLength("gggg aaa rrrrrrrr lllll vv h");
				wordLength("Маргарита Николаевна сидела перед трюмо в одном купальном халате, 
							наброшенном на голое тело, и в замшевых черных туфлях. Золотой браслет 
							с часиками лежал перед Маргаритой Николаевной рядом с коробочкой, 
							полученной от Азазелло, и Маргарита не сводила глаз с циферблата.");
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 17.</h2>
				<h4>
				Напишите функцию определения суммарного количества единиц в числах от 1 до 100.
				</h4>
			<?php
				function sumUnits($start, $finish){
					$str = '';
						for ($i = $start; $i <= $finish; $i++){ 
						$str .= $i;
						}
					$sum = 0;
						for ($i = 0; $i < strlen($str); $i++){
							if ($str[$i] == 1) $sum += 1;
						}
						echo "<p>Суммарное количество единиц в цифрах чисел от {$start} до {$finish} составляет {$sum} ед.</p>";
					}
				sumUnits(1, 100);
				sumUnits(1, 50);
				sumUnits(51, 100);
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 18.</h2>
				<h4>
				Напишите функцию, которая разбивает длинную строку тегами <br> так, чтобы длина каждой подстроки была не более N символов. Новая подстрока не должна начинаться с пробела.
				</h4>
			<?php
				function textWrapping($text, $n, $symbol){
					$str = chunk_split($text, $n, $symbol);
					echo "<p>Подстроки длинной не более {$n} символов:<br>{$str}</p>";
				}
				$text = 'To Sherlock Holmes she is always THE woman. I have seldom heard him mention her under any other name. In his eyes she eclipses and predominates the whole of her sex. It was not that he felt any emotion akin to love for Irene Adler. All emotions, and that one particularly, were abhorrent to his cold, precise but admirably balanced mind. He was, I take it, the most perfect reasoning and observing machine that the world has seen, but as a lover he would have placed himself in a false position. He never spoke of the softer passions, save with a gibe and a sneer. They were admirable things for the observer—excellent for drawing the veil from men’s motives and actions. But for the trained teasoner to admit such intrusions into his own delicate and finely adjusted temperament was to introduce a distracting factor which might throw a doubt upon all his mental results. Grit in a sensitive instrument, or a crack in one of his own high-power lenses, would not be more disturbing than a strong emotion in a nature such as his. And yet there was but one woman to him, and that woman was the late Irene Adler, of dubious and questionable memory.';
				textWrapping($text, 100, "<br>");
				textWrapping($text, 60, "<br>");
			?>
		</div>
	</body>
</html>