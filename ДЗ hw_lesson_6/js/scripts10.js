function dismanUrl(url){
	var arrUrl = [];
	address = url.indexOf('/', 8);
	options = url.indexOf('?');
	hash = url.indexOf('#');
	while (true) {
		switch (true) {
			case (hash === -1 && options === -1 && address === -1):
				arrUrl.push(url);
				console.log(arrUrl);
				document.write(`[${arrUrl}]<br>`);
				break;
			case (hash === -1 && options === -1):
				arrUrl.push(url.slice(0, address), url.slice(address));
				console.log(arrUrl);
				document.write(`[${arrUrl}]<br>`);
				break;
			case (address === -1 && options === -1):
				arrUrl.push(url.slice(0, hash), url.slice(hash));
				console.log(arrUrl);
				document.write(`[${arrUrl}]<br>`);
				break;
			case (hash === -1 && address === -1):
				arrUrl.push(url.slice(0, options), url.slice(options));
				console.log(arrUrl);
				document.write(`[${arrUrl}]<br>`);
				break;
			case (hash === -1):
				arrUrl.push(url.slice(0, address), url.slice(address, options), url.slice(options));
				console.log(arrUrl);
				document.write(`[${arrUrl}]<br>`);
				break;
			case (options === -1):
				arrUrl.push(url.slice(0, address), url.slice(address, hash), url.slice(hash));
				document.write(`[${arrUrl}]<br>`);
				console.log(arrUrl);
				break;  
			case (address === -1):
				arrUrl.push(url.slice(0, options), url.slice(options, hash), url.slice(hash));
				console.log(arrUrl);
				document.write(`[${arrUrl}]<br>`);
				break;
			case true: 
				arrUrl.push(url.slice(0, address), url.slice(address, options), url.slice(options, hash), url.slice(hash));
				console.log(arrUrl);
				document.write(`[${arrUrl}]<br>`);
				break;
		}
		break;
	}
  }
  dismanUrl('https://tech.onliner.by/2018/04/26/smart-do-200/?utm_source=main_tile&utm_medium=smartdo200#zag3');
  dismanUrl('https://tech.onliner.by/2018?utm');
  dismanUrl('https://tech.onliner.by/2018');
  dismanUrl('https://tech.onliner.by');
  dismanUrl('https://tech.onliner.by/2018#zag3');
  dismanUrl('https://tech.onliner.by#zag3');
  dismanUrl('https://tech.onliner.by?utm#zag3');
  dismanUrl('https://tech.onliner.by?utm');