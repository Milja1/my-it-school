function pyramid(){
	x = prompt('Задайте количество рядов в пирамиде.');
	y = prompt('Ведите символ структуры пирамиды');
	for (let i = 1; i <= x; i++) {
		for (let j = 1; j <= i; j++) {
		}
		    if (y !== ''){
			document.write(`<br>${y.repeat(i)}`);
	  		} else {
			document.write(`<br>${String(i).repeat(i)}`);
	  		}
	}
  }
  pyramid();
