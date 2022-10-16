function testEmail(email){
	let regexp = /^^[a-z]([a-z0-9]{2})+@[a-z]+[\-\.]?[a-z]+\.([a-z]{2,11})$/i;
	document.write(`${regexp}<br>`);
	document.write(regexp.test(email));
  }
  testEmail('Msfs1298dfsdf@yndgjdex.jkbyfd.ghdghdh');