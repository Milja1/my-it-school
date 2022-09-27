//Задача 1.

/*let name = prompt('Как Вас зовут?'),
	age = prompt('Сколько Вам лет?'),
	city = prompt('В каком городе  Вы проживаете?'),
	phone = prompt('Какой номер Вашего телефона?'),
	email = prompt('Данные Вашей электронной почты.'),
	company = prompt('В какой организации вы работаете?');
document.write ('Меня зовут ' + name + '. Мне ' + age + ' года. <br/>Я проживаю в городе ' + city + ' и работаю в компании ' + company + '. <br/>Мои контактные данные: телефон ' + phone + ', почта ' + email + '.<br/><br/>');

// Задача 2.

document.write(name + ' родился в ' + (2022 - age) + ' году.');*/

//Задача 3.

/*var str = prompt("Ведите любое шестизначное число."),
	sum1 = Number(str[0]) + Number(str[1]) + Number(str[2]),
	sum2 = Number(str[3]) + Number(str[4]) + Number(str[5]),
	comparison = (sum1 == sum2) ? 'Да' : 'Нет';
console.log(str);
console.log(sum1, sum2);
console.log(comparison);*/

//Задача 4.

/*let a = prompt('Ведите число 1 или 0 или -3.'),
	comparison = (a > 0) ? 'Верно' : 'Неверно';
console.log(comparison);*/

//Задача 5.

let a = 10,
	b = 2,
	c = (a + b) + (a - b) + a * b + a / b;
console.log((a + b), (a - b), a * b, a / b);
if (c <= 1){
	console.log(c);
} else {
	console.log(c ** 2);
}

//Задача 6.

((2 < a &&  a < 11) || (6 <= b && b < 14)) ? console.log('Верно.')
										   : console.log('Неверно.');
//Задача 7.

/*let n = prompt('Ведите показание минутной стрелки на цифирблате.');
if (n >= 0 && n < 15){
	alert('Первая четверть.')
} else if (n >= 15 && n < 30){
	alert('Вторая четверть.')
} else if (n >= 30 && n < 45){
	alert('Третья четверть.')
} else {
	alert('Четвертая четверть.')
}*/

//Задача 8.

/*let date = prompt('Ведите число месяца.');
if (date >= 1 && date < 11){
	alert('Первая декада.')
} else if (date >= 11 && date < 21){
	alert('Вторая декада.')
} else {
	alert('Третья декада.')
}*/

//Задача 9.

/*let day = prompt('Введите любое целое число.');
console.log(day / 365 + ' года (лет).');
	if (365 % day != 0) console.log('Неполный год.');
console.log(day / 31 + ' месяцев.')
	if (31 % day != 0) console.log('Неполный месяц.');
console.log(day / 7 + ' недель.');
	if (7 % day != 0) console.log('Не полная неделя.');
console.log(day * 24 + ' часов.');
console.log(day * 24 * 60 + ' минут.');
console.log(day * 24 * 60 * 60 + ' секунд.');*/

//Задача 10.

let date = prompt('Ведите порядковое число любого дня года.');
	   if (date >= 1 && date <= 31) {
	alert(c = 'Январь')
} else if (date >=32 && date <= 59) {
	alert(c = 'Февраль')
} else if (date >= 60 && date <= 90) {
	alert(c = 'Март')
} else if (date >= 91 && date <= 120) {
	alert(c = 'Апрель')
} else if (date >= 121 && date <= 151) {
	alert(c = 'Май')
} else if (date >= 152 && date <= 181) {
	alert(c = 'Июнь')
} else if (date >= 182 && date <= 212) {
	alert(c = 'Июль')
} else if (date >= 213 && date <= 243) {
	alert( c = 'Август')
} else if (date >= 244 && date <= 273) {
	alert(c = 'Сентябрь')
} else if (date >= 274 && date <= 304) {
	alert(c = 'Октябрь')
} else if (date >= 305 && date <= 334) {
	alert(c = 'Ноябрь')
} else if (date >= 335 && date <= 365) {
	alert(c = 'Декабрь')
}

switch (c) {
	case 'Январь':
		alert('Зима.');
	break;
	case 'Февраль':
		alert('Зима.');
	break;
	case 'Март':
		alert('Весна.');
	break;
	case 'Апрель':
		alert('Весна.');
	break;
	case 'Май':
		alert('Весна.');
	break;
	case 'Июнь':
		alert('Лето.');
	break;	
	case 'Июль':
		alert('Лето.');
	break;
	case 'Август':
		alert('Лето.');
	break;	
	case 'Сентябрь':
		alert('Осень.');
	break;
	case 'Октябрь':
		alert('Осень.');
	break;
	case 'Ноябрь':
		alert('Осень.');
	break;
	case 'Декабрь':
		alert('Зима.');
	break;
	default: 
		alert('ошибка в коде');
}