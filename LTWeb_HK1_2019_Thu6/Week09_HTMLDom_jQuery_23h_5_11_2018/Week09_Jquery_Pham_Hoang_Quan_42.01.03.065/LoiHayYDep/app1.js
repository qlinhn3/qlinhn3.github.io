var quotes = [
	{
		quote:"Life is about making an impact, not making an income.",
		author: "Kevin Kruse"
	},
	{
		quote:"When you reach the end of your rope, tie a knot in it and hang on.",
		author: "Franklin D. Roosevelt"
	},
	{
		quote:"It is better to be feared than loved, if you cannot be both.",
		author:"Niccolo Machiavelli"
	}
]
function getQuote(){
	return quotes[Math.floor(Math.random()*quotes.length)];
}
function makeQuote(){
	var quote = getQuote();
	document.getElementById('quote').innerText = quote.quote;
	document.getElementById('author').innerText = quote.author;
}
window.onload = makeQuote();