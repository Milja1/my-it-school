function arrayNumbers(array){
	document.write(`${array[i]} `);
  i++;
	if (i < array.length) arrayNumbers(array);
}
var i = 0;
arrayNumbers([14, 58, 20, 77, 66, 82, 42, 67, 42, 4]);