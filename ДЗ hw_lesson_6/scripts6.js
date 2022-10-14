function addingZero(number){
	if (number <= 9) {
	  return number = '0' + number;  
	} else {
		return number;
	}
  }

let dateNow = new Date();
  time = (`${dateNow.getHours()}:${dateNow.getMinutes()}:${dateNow.getSeconds()}`)
  date = (`${dateNow.getDate()}.${addingZero(dateNow.getMonth())}.${dateNow.getFullYear()}`)
  document.write(`Текущее время и дата: ${time} ${date}<br>`);

let dateN = new Date("5:9:1 2017.2.9");
time1 = (`${addingZero(dateN.getHours())}:${addingZero(dateN.getMinutes())}:${addingZero(dateN.getSeconds())}`)
date1 = (`${addingZero(dateN.getDate())}.${addingZero(dateN.getMonth())}.${dateN.getFullYear()}`)
document.write(`Установленное откорректированное время и дата: ${time1} ${date1}`);
