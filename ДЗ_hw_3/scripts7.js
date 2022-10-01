let n = 1000;
let num = 0;
for (let i = 1; i < n; i++){
	if (n < 50) continue;
	n = n / 2;
	num++;
}
document.write(`Количество необходимых итераций составило num = ${num}`);