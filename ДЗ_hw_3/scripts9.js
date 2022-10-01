let str = '4 98 4 6 1 32 4 65 4 3 5 7 89 7 10 1 36 8 57';
	arr = str.split(' ')
	max = arr[0];
	min = arr[0];
	len = arr.length;
	for(let i = 0; i < len; i++){
		if (max < arr[i]){
			max = arr[i]
		} 
		if (min > arr[i]){
			min = arr[i]
		}
	}
	document.write(`Максимальное число: ${max}<br> Минимальное число: ${min}`)