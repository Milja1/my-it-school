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
				Найти максиму и минимум массива.
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
			<h2>Задание 2.</h2>
				<h4>
				Замена четных символов на '*' 

				</h4>
			<?php
				function replacingEvenDigits($strNum)
				{
					for ($i = 0; $i < strlen($strNum); $i++)
					if ($strNum[$i] % 2 == 0){
						$strNum[$i] = '*';
					}
					echo $strNum;
				}
				replacingEvenDigits('123456789');
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 3.</h2>
				<h4>
				Найти сумму элементов массива. Учесть ситуацию когда элемент вложенный массива. 
				</h4>
			<?php
				function sumArrayElements($arrays)
				{
					$sum = 0;
					foreach ($arrays as $array){
						if (is_array($array)){
							foreach ($array as $num){
								$sum += $num;
							}
						} else {
							$sum += $array;
						}
					}
					echo '<p>Сумма элементов двухмерного массива чисел :</p>';
					echo '<pre>';
					print_r($arrays);
					echo '</pre>';
					echo '<p>равна ' . $sum . '.</p>';
				}
				sumArrayElements([1, 2, 3, 4, 5, 6]);
				sumArrayElements([[10, 2], [20, 13], [24, 5], [6], [11]]);
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 4.</h2>
				<h4>
				Написать функцию, выводящую массив в обратном порядке. Усовершенествовать фукцию так, чтоб не создавать дополнительный массив.
				</h4>
			<?php
				echo '<p>Вариант 1</p>';
				function reverseArray1($arr){
					$arr1 = [];
					for ($n = 0; $n < count($arr); $n++){
						array_unshift($arr1, $arr[$n]);
				}
				echo '<pre>';
				print_r($arr1);
				echo '</pre>';		
			}
			reverseArray1([48, 9, 0, 21, 35, 99, 8, 84, 76, 4, 13, 2]);
			
			
			echo '<p>Вариант 2</p>';
			function reverseArray2($array){
				for ($n = 0; $n < count($array); $n++){
					unset($array[$n-1]);
					array_unshift($array, $array[$n]);
				}
				unset($array[$n-1]);
				echo '<pre>';
				print_r($array);
				echo '</pre>';
			}
			reverseArray2([2, 13, 4, 76, 84, 8, 99, 35, 21, 0, 9, 48]);
			?>
		</div>
		<hr>
		<div>
			<h2>Задание 5.</h2>
				<h4>
				Написать функцию возвращающую транппонированную матрицу из квадратной матрицы. 
				</h4>
			<?php
				$array = 
				[
					 [1, 2], 
					 [3, 4]
				];
				echo '<pre>';
				print_r($array);
				echo '</pre>';
								
				list ($array[0][1], $array[1][0]) = array($array[1][0], $array[0][1]);
				
				echo '<pre>';
				print_r($array);
				echo '</pre>';
			?>
		</div>
		<hr>
		<div>
			
	</body>
</html>