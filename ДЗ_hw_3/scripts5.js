let g = 7;
while(g <= 56){
	g++;
	if(g % 2 !== 0) continue;
	document.write(`${g} `);
}

document.write("<br>");

for(g = 8; g <= 56; g ++){
	if(g % 2 === 0) continue;
	document.write(`${g} `);
}