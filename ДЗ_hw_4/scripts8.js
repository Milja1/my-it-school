let arr8 =  [12, false, 'Текст', 4, 2, -5, 0];
	revArr8 = [];
	len = arr8.length;
	i = len - 1;
while (i >= 0) {
	revArr8.push(arr8[i]);
	i--;
}
console.log(revArr8);

arr8.reverse();
document.write(`${arr8}`);