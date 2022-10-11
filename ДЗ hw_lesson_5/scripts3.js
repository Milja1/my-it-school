var min = (a, b) => {
	if(a < b) min = a;
	else min = b
	return min;
  }
  document.write(`Меньшее число: ${min(4, 10)}`);
  
  var max = (a, b) => {
	if(a > b) max = a;
	else max = b
	return max;
  }
  document.write(`Большее число: ${max(11, 10)}`);
  