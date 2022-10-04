let arrWhile = [];
	i = 23;
while (i <= 57) {
	arrWhile.push(i);
	i++;
}
document.write(arrWhile);

let arrFor = [];
for (let i = 23; i <= 57; i++){
	arrFor.push(i);
}

let len = arrFor.length;
	result = 0;
for (let a = 0; a < len; a++){
	result += arrFor[a];
}
document.write(`<br><br>Сумма элементов нового массива: ${result}.`);