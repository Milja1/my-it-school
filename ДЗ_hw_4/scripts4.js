let arr4 = ['10','20','30','50','235','3000'];
	len = arr4.length;
for (let i = 0; i < len; i++) {
	console.log(arr4[i][0])
	if (arr4[i][0] == 1 || arr4[i][0] == 2 || arr4[i][0] == 5){
		first_digit = arr4[i];
	document.write(`${arr4[i]} `)
	}
}