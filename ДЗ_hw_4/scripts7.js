let number = 0;
	arrNumber = [];
	i = 0;
	while ((number = prompt('Вводите любые числа. Для остановки процесса введите пустую строку.')) !== '') {
		if (isNaN(number)) {
			alert('Ошибка ввода.');
		} else {
		i++;
		arrNumber.push(number)
	}
}
console.log(arrNumber);

arrNumber.sort(function(a, b) {
return a-b;
});
document.write(arrNumber);
