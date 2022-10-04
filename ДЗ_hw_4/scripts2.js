let arr = [-2, -1, -3, 15, 0, -4, 2, -5, 9, -15, 0, 4, 5, -6, 10, 7];
    len = arr.length;
    negNum = 0;
for (let i = 0; i < len; i++) {
  if (-10 < arr[i] && arr[i] < -3) {
    negNum = arr[i];
    document.write(`${negNum} `)
  }
}