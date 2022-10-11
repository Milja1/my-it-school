function numbersFibonacci(b){
	a = 0
	c = a + 1;
	fib = 0;
	for (let i = c; i <= b-2; i++){
	  a = a + c; 
	  c = a - c; 
	  a = a - c; 
	  c = a + c;
	  fib = a + c;
	}
	return fib;
  }
  document.write(numbersFibonacci(1000));