let arr9 = [5, 9, 21, , , 9, 78, , , , 6];
	len = arr9.length;
	empty = 0;
for(let i = 0; i < len; i++){
	if (arr9[i] == undefined){
		empty +=1;
	}
}
document.write(empty);