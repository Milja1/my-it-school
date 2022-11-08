<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>hw_lesson_02</title>
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
	
	</style>
	
	</head>
	<body>
		<div>
			<h2>Задание 1.</h2>
				<h4>
				Если переменная $a пустая, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 3, -3, 0, null, true, '', '0'.
				</h4>
			<?php
				function emptyVariable($a)
				{
					echo (empty($a) === true) ? '<p>'.var_dump($a).' - верно</p>' : '<p>'.var_dump($a).' - неверно</p>';
				}
				emptyVariable('');
				emptyVariable(3);
				emptyVariable(-3);
				emptyVariable(0);
				emptyVariable(null);
				emptyVariable(true);
				emptyVariable('0');
				emptyVariable(' ');
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 2.</h2>
				<h4>
				Дано трехзначное число. Поменяйте среднюю цифру на ноль.
				</h4>
			<?php
				function replacingDigit($a){
					$a = (string)$a;
					$result = $a[0] . 0 . $a[2];
					return '<p> после замены средней цифры в числе ' . $a . ' получаем результат - ' . (int)$result . '</p>';
				}
				echo replacingDigit(123);
				echo replacingDigit(403);
				echo replacingDigit(357);
				echo replacingDigit(920);
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 3.</h2>
				<h4>
				Если переменная $a равна или меньше 1, а переменная $b больше или равна 3, то выведите сумму этих переменных, иначе выведите их разность 
(результат вычитания). Проверьте работу скрипта при $a и $b, равном 1 и 3, 0 и 6, 3 и 5.
				</h4>
			<?php
				function comparisonVariables($a, $b){
					if ($a <= 1 && $b >= 3){
						$result = $a + $b;
					} else {
						$result = $a - $b;
					}
					return "<p>В резудьтате сравнения чисел {$a} и {$b}, получено значение: {$result}.</p>";
				}
				echo(comparisonVariables(1, 3));
				echo(comparisonVariables(0, 6));
				echo(comparisonVariables(3, 5));
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 4.</h2>
				<h4>
				Дана строка с символами, например, 'abcde'. Проверьте, что первым символом этой строки является буква 'a'. Если это так - выведите 'да', в противном случае выведите 'нет'.

				</h4>
			<?php
				function comparisonCharacter($str){
					$result = ($str[0] === 'a') ? "ДА" : "НЕТ";
					echo '<p>В результате сравнения первого символа строки "' . $str . '" получено ' . $result. '.</p>';
				}
				comparisonCharacter('abcde');
				comparisonCharacter('bacde');
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 5.</h2>
				<h4>
				Дана строка из 6-ти цифр. Проверьте, что сумма первых трех цифр равняется сумме вторых трех цифр. Если это так - выведите 'да', в противном случае выведите 'нет'
				</h4>
			<?php
				function comparingAmount($str){
					$result = ($str[0] + $str[1] + $str[2] === $str[3] + $str[4] + $str[5]) ? "ДА" : "НЕТ";
					echo '<p>В результате сравнения сумм первых трех и последних трех цифр строки "' . $str . '" получено ' . $result. '.</p>';
				}
				comparingAmount('123456');
				comparingAmount('789987');
				comparingAmount('642581');
				comparingAmount('897897');
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 6.</h2>
				<h4>
				Разработайте программу, которая определяла количество прошедших часов по введенным пользователем градусах. Введенное число может быть от 0 до 360.
				</h4>
				<form action="hw_lesson_02.php" method="get">
					Для определения прошедших часов введите значение в градусах: <br><input type="text" name="timeDegrees" ; required placeholder="от 0 до 360">
					<input type="submit">
				</form>
			<?php
				if ($_GET["timeDegrees"] < 0 || $_GET["timeDegrees"] > 360){
					echo '<p>Вы вели не верное число, повторите попытку.</p>';
				} else {
					echo '<p>Вы ввели значение ' . $_GET["timeDegrees"] . ' градусов.</p>';
					$hours = $_GET["timeDegrees"] / 15;
					$minutes = $_GET["timeDegrees"] % 15 * 4;
					echo '<p>Прошло ' . (int)$hours . ' часа(-ов) ' . $minutes . ' минут(ы).</p>';
				}
				
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 7.</h2>
				<h4>
				Разработайте программу, которая из чисел 20 .. 45 находила те, которые делятся на 5 и найдите сумму этих чисел.
				</h4>
			<?php
				function sumMultiples($start, $finish, $divider){
					$sum = 0;
						for ($i =$start; $i <= $finish; $i++){
							if ($i % $divider == 0)
								$sum = $sum + $i;
						}
					return "<p>Сумма чисел кратных {$divider}, лежащих в диапазоне от {$start} до {$finish}, равна {$sum}.</p>";
				}
				echo sumMultiples(20, 45, 5);
				echo sumMultiples(0, 9, 3);
				echo sumMultiples(10, 100, 10);

			?>
		</div>
		<hr>
		<div>
			<h2>Задание 8.</h2>
				<h4>
				Дано пятизначное число. Цифры на четных позициях «занулить». Например, из 12345 получается число 10305.
				</h4>
			<?php
				function insertZero($number){
					$num = (string)$number;
					$len = strlen($num);
					for ($i = 0; $i < $len; $i++){
						if ($i % 2) $num[$i] = 0;
					}
					$result = $num[0].$num[1].$num[2].$num[3].$num[4];
					echo '<p>При "зануляции" четных позиций числа ' . $number . ' получаем число ' . (int)$result . '.</p>';
				}
				insertZero(12345);
				insertZero(96814);
				insertZero(32168);
				insertZero(12346);
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 9.</h2>
				<h4>
				Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.
				</h4>
			<?php
				$num = 1000;
				$min = 50;	
				$i = 0;
				while ($num/2 >= $min){
				$num = $num/2;
				$i++;
				}
				echo "<p>Решение через цикл 'while'. Для выполнения условия задания необходимо {$i} итерации.</p>";
				
				function numberIterations ($num, $min){
					$iteration = 0;
					for ($i = 0; $num/2 >= $min; $i++){
					$num = $num/2;
					$iteration += 1;
					}
					echo "<p>Решение через цикл 'for'. Для выполнения условия задания необходимо {$iteration} итерации.</p>";
				}
				numberIterations(1000, 50);
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 10.</h2>
				<h4>
				Вывести на экран квадрат из 'n' строк, в каждой строке 'n' звездочек.
				</h4>
			<?php
				function figure($n, $symbol){
					for ($i = 1; $i <= $n; $i++) {
						for ($j = 1; $j <= $i; $j++) {
						}
						echo '<p id="square">' . str_repeat($symbol, $n) . '</p>';
					}
				}
				figure(10, '* ');
				figure(8, '+ ');
				figure(5, '# ');
			?>
		</div>
	</body>
</html>