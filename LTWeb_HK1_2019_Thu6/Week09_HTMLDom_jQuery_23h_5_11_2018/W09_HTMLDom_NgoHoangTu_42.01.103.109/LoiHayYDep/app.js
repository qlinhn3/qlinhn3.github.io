var quotes= [
{
	quote:'Đẳng cấp là mãi mãi',
	author:"Tukute"
},
{
	quote:'Cũng đành thôi',
	author:"Đức Phúc"
},
{
	quote:'Không cần phải hứa đâu em',
	author:"Phạm Khánh Hưng"
},
]
function getQuote(){
	return quotes[Math.floor(Math.random()*quotes.length)];
}
function makeQuote(){
	var quote=getQuote();
	document.getElementById('quote').innerText=quote.quote;
	document.getElementById('author').innerText=quote.author;
}
window.onload=makeQuote();