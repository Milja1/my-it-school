let metaUtf8 = document.createElement('meta');
metaUtf8.setAttribute('charset', 'Utf-8');
document.head.appendChild(metaUtf8);

let metaHttpContent = document.createElement('meta');
metaHttpContent.setAttribute('http-equiv', "X-UA-Compatible");
metaHttpContent.setAttribute('content', "IE=edge");
document.head.appendChild(metaHttpContent);

let metaNameContent = document.createElement('meta');
metaNameContent.setAttribute('name', "viewport");
metaNameContent.setAttribute('content', "width=device-width, initial-scale=1.0");
document.head.appendChild(metaNameContent);

let title = document.createElement('title');
title.innerHTML = 'New html document';
document.head.appendChild(title);
console.log(title);

let div1 = document.createElement('div');
div1.classList.add ('col-1');
document.body.appendChild(div1);

let h1 = document.createElement('h1');
h1.innerHTML = 'Choose Your Option';
div1.appendChild(h1);

let p1 = document.createElement('p');
p1.innerHTML = 'But I must explain to you how all this mistaken idea of denouncing';
div1.appendChild(p1);

let div2 = document.createElement('div');
div2.classList.add ('row'); 			
document.body.appendChild(div2);

let div3 = document.createElement('div');
div3.classList.add ('col-2'); 			
div2.appendChild(div3);

let h2 = document.createElement('h3');
h2.innerHTML = 'Freelancer';
div3.appendChild(h2);

let h3 = document.createElement('h1');
h3.innerHTML = 'Initially<br>designed to';
div3.appendChild(h3);

let p2 = document.createElement('p');
p2.innerHTML = 'But I must explain to you how all this<br>mistaken idea of denouncing';
div3.appendChild(p2);

let div5 = document.createElement('div');
div5.classList.add ('block');
div3.appendChild(div5);

let p4 = document.createElement('p');
p4.innerHTML = 'Start here';
div5.appendChild(p4);

let div4 = document.createElement('div');
div4.classList.add ('col-3'); 			
div2.appendChild(div4);

let h4 = document.createElement('h3');
h4.innerHTML = 'Studio';
div4.appendChild(h4);

let h5 = document.createElement('h1');
h5.innerHTML = 'Initially<br>designed to';
div4.appendChild(h5);

let p3 = document.createElement('p');
p3.innerHTML = 'But I must explain to you how all this<br>mistaken idea of denouncing';
div4.appendChild(p3);

let div6 = document.createElement('div');
div6.classList.add ('block'); 
div4.appendChild(div6);

let p5 = document.createElement('p');
p5.innerHTML = 'Start here';
div6.appendChild(p5);

let style = document.createElement('style');
style.innerHTML = `
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    /*margin-top: 10px*/
}
.col-1 {
    width: 744px;
    height: 160px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}
.col-1 h1 {
    padding-top: 35px;
    padding-bottom: 15px;
    font-family:'Trebuchet MS';
    font-size: 40px;
}
.col-1 p {
    font-size: 13px;
    color: rgb(173, 172, 172);
    font-family:Verdana, Geneva, Tahoma, sans-serif;
}
.row {
    font-size: 0;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}
.col-2, .col-3 {
    /*font-size: 20px;*/
    height: 460px;
    width: 372px; 
    display: inline-block;
    text-align: center;
}
h3 {
    padding-top: 80px;
    font-size: 14px;
    font-family:Arial, Helvetica, sans-serif;
    letter-spacing: 2px;
    text-transform: uppercase; 
}
.col-2 {
    border-radius: 5px 0 0 5px;
    background-color: rgb(250, 245, 240);
    border: 1px solid rgb(179, 178, 178);
}
.col-3 {
    border-radius: 0 5px 5px 0;
    background-color: rgb(143, 117, 190);
    color: white;
    border: 1px solid rgb(143, 117, 190);

}
.col-2 h1{
    font-size: 40px;
    padding-top: 20px;
    padding-bottom: 30px;
    font-family:'Trebuchet MS';
}
.col-2 h3 {
    color: rgb(173, 172, 172);
}
.col-2 .block p{
    color: black;
}
.col-3 h1{
    font-size: 40px;
    padding-top: 20px;
    padding-bottom: 30px;
    font-family:'Trebuchet MS';
}
.col-3 h3 {
    color: rgb(234, 198, 114);
}
.col-3 .block p{
    color: white;
}
.col-2 p {
    color: rgb(173, 172, 172);
    font-size: 13px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    padding-bottom: 20px;
}
.col-3 p {
    color: rgb(173, 172, 172);
    font-size: 13px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    padding-bottom: 20px;
}
.block{
    border: 3px solid rgb(234, 198, 114);
    height: 50px;
    width: 150px;
    border-radius: 40px;
    margin-top: 35px;
    margin-left: auto;
    margin-right: auto;
    padding: 15px;
}
.block p {
    text-transform:uppercase;
    font-size: 12px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    font-weight: bolder;
    letter-spacing: 2px;
}
`;
document.head.appendChild(style); 
