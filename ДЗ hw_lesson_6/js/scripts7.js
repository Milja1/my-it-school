function pattern_strings(strings){
	pattern = strings.match(/[a][b]+[a]/gi);
	document.write(pattern);
  }
pattern_strings('aa aba abba abbba abca abea');