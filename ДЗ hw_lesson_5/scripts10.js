function sumArray(array){
	var sum = 0;
	for(var i = 0; i < array.length; i++){
	  sum += array[i];
	}
	if (sum > 9){
		sumArray([...sum.toString()].map(Number));
	}
	document.write(`${sum} `);
  }
  sumArray([3, 2, 5, 6, 10, 12, 16, 182]);