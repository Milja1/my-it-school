function testNumberPhone(phone){
	let regexp = /^[+][\d]{3}[(][\d]{2}[)][\d]{3}-[\d]{2}-[\d]{2}$/;
	document.write(`${regexp}<br>`);
	document.write(regexp.test(phone));
  }
  testNumberPhone('+375(29)222-22-22');