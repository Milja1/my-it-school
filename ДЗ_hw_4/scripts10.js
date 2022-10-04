let arr10 = [1,8,0,13,76,8,7,0,22,0,2,3,2];
	sum = 0;
if (arr10.indexOf(0) == arr10.lastIndexOf(0)){
	sum = sum;
} else {
	let newarr10 = arr10.slice(arr10.indexOf(0), arr10.lastIndexOf(0));
	len = newarr10.length;
	for (let i = 0; i < len; i++){
		sum += newarr10[i];
	}
}
document.write(sum);