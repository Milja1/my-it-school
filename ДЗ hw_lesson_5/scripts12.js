function framehAttributes(){
	var str1 = (`Домашняя работа: "${prompt('Введите название темы Вашей раборты', 'Функции')}"`);
		str2 = (`Выполнил: студент гр. ${prompt('Введите номер Вашей группы', 'BE107')}`);
		str3 = (`${prompt('Введите Ваши фамилию, имя , отчество', 'Мильгуй Сергей Александрович')}`);
		symbol = '*';
		space = ' ';
	if (str1.length >= str2.length && str1.length >= str3.length){
	  len = str1.length;
	} else if (str2.length >= str1.length && str2.length >= str3.length) {
	  len = str2.length;
	} else {
	  len = str3.length;
	}
	console.log(`${symbol}${symbol.repeat(len+2)}${symbol}
${symbol} ${str1} ${space.repeat(len-str1.length)}${symbol}
${symbol} ${str2} ${space.repeat(len-str2.length)}${symbol}
${symbol} ${str3} ${space.repeat(len-str3.length)}${symbol}
${symbol}${symbol.repeat(len+2)}${symbol}`);
  }
  framehAttributes()