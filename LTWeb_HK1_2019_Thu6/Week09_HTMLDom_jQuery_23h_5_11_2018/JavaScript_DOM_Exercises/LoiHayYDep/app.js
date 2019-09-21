var quotes = [

	{//0
		quote:'Life is about'
		author:"Kevin Kruse"
	},
	{//1
		quote:'We know what we are'
		author:"William"
	},
	{//2
		quote:'Believe you can and you'
		author:"Theodore"
	},
	{//3
		quote:'It doesn\'t'
		author:"dhhh"
	},
]
function getQuote(){
	return quotes[Math.floor(Math.random()*quotes.length)];
}

function makeQuote(){
	var quote =getQuote();
	document.getElementById('quote').innerText = quote.quote;
	document.getElementById('author').innerText = quote.author;
}
window.onload = makeQuote();