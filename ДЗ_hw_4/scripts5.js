let arr5 = ['ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ', 'ВС'];
	len = arr5.length;
for (let i = 0; i < len; i++){
	days_week = arr5[i];
	if (arr5[i] == 'СБ' || arr5[i] == 'ВС'){
		days_week = days_week.bold();
	}	
	document.write(`${days_week} `);
}