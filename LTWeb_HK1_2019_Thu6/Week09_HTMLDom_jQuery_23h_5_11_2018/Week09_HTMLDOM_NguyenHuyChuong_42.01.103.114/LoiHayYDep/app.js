var quotes= [
{
	quote:'Thành công là đạt được thứ bạn muốn. Hạnh phúc là muốn thứ bạn đạt được',
	author:"Ahihi"
},
{
	quote:'Hãy ghi nhớ hạnh phúc là phụ thuộc duy nhất vào điều bạn nghĩ',
	author:"kaka"
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