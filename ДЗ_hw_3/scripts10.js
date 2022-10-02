let t = 6987502146801258;
number = String(t);
len = number.length;
numbers = 0;
sum = 0;
rev = 0;
digits = 0;

document.write(`Число состоит из цифр: `)
for (let i = 0; i < len; i++){
	numbers = number[i];
	document.write(`${numbers} `)
}

document.write(`<br>Cумма цифр в числе: `)
for (let i = 0; i < len; i++){
	sum += +number[i];
}
document.write(`${sum} `)

document.write(`<br>Обратный порядок цифр в числе: `);
for (let i = (len - 1); i > -1; i--){
	x = number[i];
	document.write(`${x} `);
}

document.write(`<br>Количество цифр в числе: `);
for (let i = 0; i < len; i++){
	number /= 10;
	digits++;
}
document.write(`${digits}`);