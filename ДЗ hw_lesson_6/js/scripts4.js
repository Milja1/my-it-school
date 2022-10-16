function powSqrt(arr) {
	var len = arr.length;
	  sum = 0;
	document.write(`'Кубы' элементов массива [4, 2, 5, 19, 13, 0, 10]:<br>`);
	  for (let i = 0; i < len; i++){
		sum += Math.pow(arr[i], 3);
		document.write(`${Math.pow(arr[i], 3)}<br>`);
	  }
	document.write(`Сумма 'кубов' элементов массива: ${sum}`);
	document.write(`<br>Квадратный корень суммы 'кубов' элементов массива: ${Math.sqrt(sum)}`);
	}
powSqrt([4, 2, 5, 19, 13, 0, 10]);