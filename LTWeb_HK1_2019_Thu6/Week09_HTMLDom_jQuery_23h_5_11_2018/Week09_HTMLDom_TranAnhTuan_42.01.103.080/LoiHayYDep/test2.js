var quotes=[
{quote:'Tin rằng bạn có thể làm một điều gì đó đồng nghĩa với việc bạn đã đi được nửa đường đến đó',
author:"Theodore Roosevelt"
},
{quote:'Đừng so sánh mình với ai nếu bạn làm như vậy có nghĩa bạn đang sỉ nhục chính bản thân mình.',
author:"Bill Gates"
},
{quote:'Không có hoàn cảnh nào tuyệt vọng, chỉ có người tuyệt vọng vì hoàn cảnh',
author:"Khuyết danh"
},
{quote:'Bắt đầu từ nơi bạn đứng. Sử dụng những gì bạn có,làm những gì bạn có thể',
author:"Arthur Ashe"
},
{quote:'Tôi có một triết lý đơn giản đó là: lấp đầy những khoảng trống, làm trống những khoảng đầy và gãi những chỗ ngứa.',
author:"Alice Roosevelt Longworth."
},
{quote:'Dù cho bản tin thời tiết có dự báo điều gì đi nữa, thì ta hãy cứ sống vui vẻ như thể mùa xuân đã đến rồi',
author:"Lily Pulitzer"
},
{quote:'Căn bệnh lớn nhất của thời đại này đó là khi người ta cảm thấy mình không hề được yêu thương',
author:"Công nương Diana"
},
{quote:'Chúng ta không nên bỏ cuộc, chúng ta không nên đề những khó khăn đánh bại mình.',
author:"A. P. J. Abdul Kalam"
},
{quote:'Tôi đã thất bại thật nhiều thật nhiều lần trong cuộc đời mình. Và đó cũng là động lực để cho tôi trở nên thành công như bây giờ',
author:"Michael Jordan"
},
{quote:'Bạn có sức mạnh lớn hơn những gì mà bạn nghĩ đấy. Và khi bạn tự tin là chính mình, bạn sẽ trở nên xinh đẹp hơn rất nhiều',
author:"Melissa Etheridge"
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