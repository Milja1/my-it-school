function pyramid(){
	ranks = prompt('Задайте количество рядов в пирамиде.');
	symbol = prompt('Ведите символ структуры пирамиды', '^');
	space = '&nbsp';
	for (let i = 1; i <= ranks; i++) {
	  for (let j = 1; j <= i; j++) {
		}
	  document.write(`<br>${space.repeat(ranks-i)}${symbol.repeat(i)}`);
	}
  }
  pyramid();
  
  function inverted_pyramid(){
	ranks = prompt('Задайте количество рядов в перевернутой пирамиде.');
	symbol = prompt('Ведите символ структуры перевернутой пирамиды', '*');
	space = '&nbsp';
	for (let i = ranks; i > 0; i--) {
	  for (let j = 1; j <= i; j++) {
		}
	  document.write(`<br>${space.repeat(ranks-i)}${symbol.repeat(i)}`);
	}
  }
  inverted_pyramid();