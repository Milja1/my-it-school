function entry(){
	var Array = [];
	first_number = +prompt('Введите начальное число диапазона массива');
	length = +prompt('Введите последнее число диапазона массива');
	if (first_number > length) {
	  first_number = first_number + length;
	  length = first_number - length;
	  first_number = first_number - length;
	}
	for (var i = first_number; i <= length; i++){
	  Array.push(i);
	}
	return Array;
  }
	
  function output(){
	document.write(entry())
  }
  output();