let str = '4 98 4 6 1 32 4 65 4 3 5 7 89 7 10 1 36 8 57';
const arr = str.split(' ');
document.write(`Минимальное число: ${Math.min(...arr)}, Максимальное число: ${Math.max(...arr)}`)