var quotes=[
{quote:'Sống chỉ vì mình là một sự lạm dụng',
author:"W. Shakespeare"
},
{quote:'Cuộc sóng những người tốt là tuổi thanh xuân vĩnh viễn',
author:"S.Nô-đi-ê"
},
{quote:'Đôi khi bạn sẽ chẳng biết được những khoảnh khắc quý giá đến nhường nào cho đến khi chúng biến thành ký ức đẹp',
author:"Dr. Sesus"
},
{quote:'Hãy trở thành tia hy vọng cho một người nào đó đang cảm thấy tuyệt vọng',
author:"Maya Angelou"
},
{quote:'Chúng ta không thể giúp đỡ tất cả mọi người được, nhưng tất cả mọi người có thể cùng nhau giúp đỡ một người',
author:"Ronan Reagan"
},
{quote:'Dù cho bản tin thời tiết có dự báo điều gì đi nữa, thì ta hãy cứ sống vui vẻ như thể mùa xuân đã đến rồi',
author:"Lily Pulitzer"
},
{quote:'Căn bệnh lớn nhất của thời đại này đó là khi người ta cảm thấy mình không hề được yêu thương',
author:"Công nương Diana"
},
{quote:'Nếu bạn cảm thấy chán nản, khoan hãy tuyệt vọng. Hãy nhìn xem, mặt trời có phiên lặn vào mỗi đêm, nhưng sáng hôm sau nó lại quay trở lại đấy thôi',
author:"Dolly Parton"
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