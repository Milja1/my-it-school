let number = 0;
	sum = 0;
	i = 0;
	while ((number = prompt('Введите любое число. Для остановки введите "0" или пустую строку.')) !== '0' && number !== '') {
		if (isNaN(number)) {
			alert('Ошибка ввода.');
		} else {
		i++;
		sum += +number;
		document.write(`${number} `);
		}
}
document.write(`<br>Чисел введено: ${i}.<br>Сумма чисел: ${sum}.<br>Среднее арифметическое: ${sum / i}.`);