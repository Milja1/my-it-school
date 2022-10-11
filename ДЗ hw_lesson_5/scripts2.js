var cubeSquare = (a) => {
  square = a * a;
  cube = square * a;
  return (`Куб числа '${a}' = ${cube} <br>Квадрат числа '${a}' = ${square}<br><br>`);
}
document.write(cubeSquare(2));
document.write(cubeSquare(3));
document.write(cubeSquare(4));
document.write(cubeSquare(5));
document.write(cubeSquare(6));