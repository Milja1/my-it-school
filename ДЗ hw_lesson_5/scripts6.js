function isEven(x) {
	if ( x % 2 == 0) {
	  return true;
	} else {
	  return false;
	}
  }

function createArray(first_element, length) {
  length = length || 10;
var array = [];
for (var x = first_element; x <= length; x++){
  if (isEven(x) == true)
  array.push(x);
}
return array;
}
document.write(createArray(1));
document.write(createArray(6, 30));
document.write(createArray(-9, 15));