var quotes = [
	{
		quote:'Kinh doanh? Rất đơn giản; đó là tiền của người khác',
		author:'Alexandre Dumas'
	},
	{
		quote:'Hứa hẹn, hứa hẹn thật nhiều, đó là linh hồn của quảng cáo',
		author:'Samuel Johnson'
	},
	{
		quote:'Thành công hay thất bại là do thái độ trong suy nghĩ nhiều hơn là khả năng suy nghĩ',
		author:'Walter Scott'
	},
	{
		quote:'Bạn phải sẵn sàng vất vả và chi tiêu tằn tiện để đưa được ý tưởng cất cánh',
		author:'Garrett Camp'
	}
]
function getQuote () {
	return quotes[Math.floor(Math.random() * quotes.length)];
}

function makeQuote(){
	var quote=getQuote();
	document.getElementById('quote').innerText=quote.quote;
	document.getElementById('author').innerText=quote.author;
}

window.onload=makeQuote();