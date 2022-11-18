<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>hw_lesson_04</title>
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
		.color {
			height: 100px;
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
				Дана строка. Сделайте из нее строку со словами в верхнем регистре.
				</h4>
			<?php
				function upperСase($str)
				{
					if (mb_strtoupper($str) === mb_strtoupper('test')){
						$strNew =  ucwords($str);
					} else {
						$strNew =  mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
					}
					
					echo '<p>Cтрока со словами в верхнем регистре: ' .$strNew. '.</p>';
				}
				upperСase('london is the capital of great britain');
				upperСase('LOREM IPSUM DOLOR SIT AMET CONSECTETUR ADIPISICING ELIT');
				upperСase('лишь только председатель покинул квартиру, из спальни донесся низкий голос:');
				upperСase('САДОВОЕ КОЛЬЦО, – НИКТО НЕ ПРИШЕЛ ПОД ЛИПЫ, НИКТО НЕ СЕЛ НА СКАМЕЙКУ, ПУСТА БЫЛА АЛЛЕЯ.');
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 2.</h2>
				<h4>
				Дана строка. Удалите теги из этой строки и запишите каждое слово этой строки в отдельный элемент массива. 

				</h4>
			<?php
				function deletingTags($htmlStr)
				{
					$str = strip_tags($htmlStr);
					echo '<p>Cтрока после удаления тегов: "' . $str . '".</p>';
					$arr1 = explode(' ', $str);
					echo '<p>Массив слов строки: </p>';
					//var_dump('<p>'. $arr1. '<p>');
					echo '<p>';
					print_r($arr1);
					echo '</p>';
				}
				deletingTags('html <b>css</b> php');
				deletingTags('Я <b>учусь</b> "кодить."');
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 3.</h2>
				<h4>
				Дана строка. Перемешайте символы этой строки в случайном порядке 
				</h4>
			<?php
				function mixedCharacters($string)
				{
					$stringSymbol = str_shuffle($string);
					echo '<p>Символы сроки "' . $string.  '" перемешанными в случайно порядке: ' . $stringSymbol. '</p>';
				
				}
				mixedCharacters('s^r_shuf*le');
				mixedCharacters('Псевдоним'); 
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 4.</h2>
				<h4>
				Найдите количество дней в текущем месяце. 
				</h4>
			<?php
				function numberDaysMonth()
				{
					$months = array( 1 => 'январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 
					'август', 'сентябрь' ,'октябрь' ,'ноябрь' ,'декабрь');
					$month = substr_replace($months[date('n')], 'e', -2);
					$str = ($month == 31) ? 'день' : 'дней';
					$numberDays = date("t");
					echo "<p>В текущем {$month} месяце - {$numberDays} ${str}.</p>";					
				}
				numberDaysMonth();
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 5.</h2>
				<h4>
				Выведите текущую дату-время в различных форматах. 
				</h4>
			<?php
				echo '<p>Текущая дата: '. date('o-m-d') . '</p>';
				echo '<p>Текущая дата: '. date('d.m.o') . '</p>';
				echo '<p>Текущая дата: '. date('d.m.y') . '</p>';
				echo '<p>Текущее время: '. date('H:i:s') . '</p>';
				echo '<p>Текущее время: '. date('timestamp') . '</p>';
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 6.</h2>
				<h4>
				В переменной $date лежит дата. Прибавьте к этой дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня
				</h4>
			<?php
				echo '<p>Текущая дата: '. date('o-m-d') . '</p>';
				echo '<p>Прибавили 1 месяц и 2 дня: ' . date('o-m-d', strtotime('+ 1 month 2 day')) . '</p>';
				echo '<p>Прибавили 1 год и 3 дня: ' . date('o-m-d', strtotime('+ 1 year 3 day')) . '</p>';
				echo '<p>Отняли 3 дня: ' . date('o-m-d', strtotime('- 3 day')) . '</p>';
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 7.</h2>
				<h4>
				Дана строка с буквами и цифрами. Удалите из нее все цифры.
				</h4>
			<?php
				function checkingDigit($str)
				{
					$len = strlen($str);
					$string = '';
					for ($i = 0; $i < $len; $i++){
						if (!(is_numeric($str[$i])))
						$string .=$str[$i];
					}
					echo '<p>После удаления цифр из строки "' .$str. '" получаем строку "' .$string. '".</p>';
				}
				checkingDigit('1a2b3c4b5d6e7f8g9h0');
				checkingDigit('12А34Б56В78Г90Д09е87й65к43а21');
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 8.</h2>
				<h4>
				Даны числа. Найдите минимальное и максимальное число.
				</h4>
			<?php
				function minMaxNumber($arr)
				{
					$minNum = min($arr);
					$maxNum = max($arr);
					echo '<p>В массиве чисел :</p>';
					print_r($arr);
					echo '<p>минимальное число ' .$minNum. ';<br>максимальное число ' .$maxNum.'.</p>';
				}
				minMaxNumber([4, -2, 5, 19, -130, 0, 10]);
				minMaxNumber([1, -2, 3, -4, 5, -6, 0]);
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 9.</h2>
				<h4>
				Выведите на экран случайное число от 1 до 100.
				</h4>
			<?php
				function randomNumber($min, $max)
				{
					$num = rand($min, $max);
					
					echo '<p>Случайное число в диапазоне от ' .$min. ' до ' .$max. ': ' .$num. '.</p>';
				}
				randomNumber(1, 100);
				randomNumber(100, 200);
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 10.</h2>
				<h4>
				Создайте ассоциативный массив дней недели. Ключами в нем должны служить номера дней от начала недели. Выведите на экран текущий день недели. 
				</h4>
			<?php
				$arrayDaysWeek = array(
					"1" => "понедельник", 
					"2" => "вторник", 
					"3" => "среда", 
					"4" => "четверг",
					"5" => "пятница", 
					"6" => "суббота", 
					"7" => "воскресенье"
				);    
				echo '<pre>';
				print_r($arrayDaysWeek);
				echo '</pre>';
				echo '<p>Текущий день недели - ' . $arrayDaysWeek[date('N')] . '.</p>';
				
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 11.</h2>
				<h4>
				Дан двухмерный массив с числами. Найдите сумму элементов этого массива. 
				</h4>
			<?php
				function sumArrayElements($arrays)
				{
					$sum = 0;
					foreach ($arrays as $array){
						foreach ($array as $num){
							$sum += $num;
						}
					}
					echo '<p>Сумма элементов двухмерного массива чисел :</p>';
					echo '<pre>';
					print_r($arrays);
					echo '</pre>';
					echo '<p>равна ' . $sum . '.</p>';
				}
				sumArrayElements([[1, 2, 3], [4, 5], [6]]);
				sumArrayElements([[10, 2], [20, 13], [24, 5], [6], [11]]);
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 12.</h2>
				<h4>
				Есть массив $array. Необходимо, при помощи лишь одного цикла без использования функций PHP, вывести массив цифр без дублей.
				</h4>
			<?php
				function arrayOutput($array) 
				{
					echo '<p>Цифры массива </p>';
					echo '<pre>';
					print_r($array);
					echo '</pre>';
					$newArray = [];
					for ($n = 0; $n < count($array); $n++){
						if ($array[$n] == $array[$n+1])
							$array[$n] = '';
							array_push($newArray, $array[$n]);
					}
					$a = array_diff($newArray, array(''));
					$b = implode(', ', $a);
					/*echo '<pre>';
					print_r($a);
					echo '</pre>';*/
					echo '<p>без дублирования: ' .$b.'</p>';
				} 
				arrayOutput(array(1, 1, 1, 2, 2, 2, 2, 3));
				arrayOutput(array(4, 4, 5, 6, 6, 7, 8, 8, 9, 9));
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 13.</h2>
				<h4>
				Используя ассоциативный массив, добавить на страницу навигационное меню.
				</h4>
			<?php
					$navigationMenu = array(
						"index.html" => "index", 
						"style.css" => "style", 
						"script.js" => "script", 
						"text.txt" => "text"
					);
					echo '<pre>';
					print_r($navigationMenu);
					echo '</pre>';

					foreach ($navigationMenu as $index => $name){
						echo "<ul><li><a href={$index}>{$name}</a></li></ul>";
					}	
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 14.</h2>
				<h4>
				Вывести на черном фоне n красных квадратов случайного размера в случайной позиции в браузере.
				</h4>
			<?php
				//function redSquares ($numberSquares){
					
					echo '<div style="background-color: #000000; height: 400px; position: relative">'; 
					$numberSquares = rand(1, 8);
					for ($i = 0; $i <= $numberSquares; $i++){
						$size = rand(50, 100);
						$positionLeft = rand(50, 800);
						$positionTop = rand(50, 200);

						echo '<div style="background-color: #ff0000; border: 1px solid #000000;height:' . $size . 'px; width:' . $size . 'px; position: absolute; margin-left:' . $positionLeft . 'px; margin-top:' . $positionTop .'px"></div>';
					}				
					echo '</div>';


				//}*
				
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 15.</h2>
				<h4>
				Дана строка с любыми символами. Нужно разбить эту строку в массив таким образом: array('1', '23', '456', '7890') и так далее пока символы в строке не закончатся.
				</h4>
			<?php
				function strPyramid($string)
				{
				echo '<p>После разбивки строки "' . $string . '" получен массив:</p>';
					for ($i = 1; $i < strlen($string)+1; $i++){
					$array[] = substr($string, 0 , $i);
					$string = substr_replace($string, (string)null, 0, $i);
				}
				
				echo '<pre>';
				print_r($array);
				echo '</pre>';
				}
				strPyramid('123456');
				strPyramid('1234567890');
				strPyramid('123456789012345678901');
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 16.</h2>
				<h4>
				Дана строка с текстом. Напишите функцию определения самого длинного слова.
				</h4>
			<?php
				function sumArrayNumbers($arr){

					echo '<p>Сумма элементов массива:</p>';
					echo '<pre>';
					print_r($arr);
					echo '</pre>';
				
					$a = array_search(0, $arr);
					$b = array_search(0, array_reverse($arr));
					$c = count($arr) - $b;
					$arr = array_slice($arr, $a, $c-$a);
					
					$sum = ($a + 1 === $c) ? 0 : array_sum($arr);
					echo '<p>между двумя нулями = ' . $sum . '.</p>';
				}
				sumArrayNumbers([48, 9, 0, 4, 21, 2, 1, 0, 8, 84, 76, 8, 4, 13, 2]);
				sumArrayNumbers([1, 8, 0, 13, 76, 8, 7, 0, 22, 0, 2, 3, 2]);
				sumArrayNumbers([1, 8, 13, 76, 8, 7, 0, 22, 2, 3 ,2]);
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 17.</h2>
				<h4>
				Сделайте функцию, которая будет генерировать случайный цвет в hex (dechex) формате (типа #ffffff).
				</h4>
			<?php
			
			$a = '#' . rand (100000, 999999);
			echo '<p> Индекс случайного цвета ' . $a .'.</p>';
			echo '<div class="color" style="background-color:' . $a . '"> </div>';
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 18.</h2>
				<h4>
				Дана строка. Найдите все места, где есть два одинаковых идущих подряд цифры и замените их на '!'.
				</h4>
			<?php
				function comparisonStringElements($str){
					echo '<p>После замены одинаковых цифр строки ' . $str . '</p>';
					for ($i = 0; $i < strlen($str); $i++){
						if ($str[$i] == $str[$i+1]){
							$str[$i] = $str[$i+1] = '!';
						}
					}
					echo '<p>получили выражение ' . $str . '</p>';
				}
				comparisonStringElements('332 441 550');
				comparisonStringElements('faa 4cc vv0');
				comparisonStringElements('a66 ccc v00 1oo');
				comparisonStringElements('124 **8 hh9 oo/ 588');
			?>
		</div>
		<h2>Задание 19.</h2>
				<h4>
				Напишите функцию строгой проверки ввода номер телефона в международном формате
				</h4>
			<?php
				function testNumberPhone($phone)
				{
					$numValidation = (preg_match('/^[+][\d]{3}[( -][\d]{2}[- )][\d]{3}-[\d]{2}-[\d]{2}$/', $phone, $matches)) ? 'true' : 'false';
					echo '<p>При валидации номера телефона ' . $phone . ' получен результат: ' . $numValidation . '.</p>';
				}
				testNumberPhone('+375(29)222-22-22');
				testNumberPhone('+375-29-222-22-22');
				testNumberPhone('+375 29 222-22-22');
				testNumberPhone('375 (29) 222-22-22');
			?>
		</div>
		<h2>Задание 20.</h2>
				<h4>
				Напишите функцию, которая должна проверить правильность ввода адреса электронной почты.
				</h4>
			<?php
				function testEmail($email)
				{
					$emailValidation = (preg_match('/^[a-z]([a-z0-9]{2})+@[a-z]+[\-\.]?[a-z]+\.([a-z]{2,11})$/i', $email, $matches)) ? 'true' : 'false';
					echo '<p>При валидации адреса электронной почты ' . $email . ' получен результат: ' . $emailValidation . '.</p>';
				}
				testEmail('Msfs1298dfsdf@yndgjdex.jkbyfd.ghdghdh');
				testEmail('Msfsdfsdf@yndgjdex.kb');
				testEmail('1298dfsdf@yndgjdex.kbyfddghdh');
				testEmail('Msfsdfsdf@yndg-.kb');
			?>
		</div>
	</body>
</html>