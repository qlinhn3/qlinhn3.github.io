var quotes=[
{//1
	quote:'Đừng so sánh mình với bất cứ ai trong thế giới này. Nếu bạn làm như vậy có nghĩa bạn đang sỉ nhục chính bản thân mình.',
	author:"Bill Gates"
},
{//2
	quote:'Không có hoàn cảnh nào tuyệt vọng, chỉ có người tuyệt vọng vì hoàn cảnh.',
	author:"Khuyết danh"
},
{
//3
	quote:'Bắt đầu từ nơi bạn đứng. Sử dụng những gì bạn có. Làm những gì bạn có thể.',
	author:"Arthur Ashe"
},
{
//4
	quote:'Tôi có một triết lý đơn giản đó là: lấp đầy những khoảng trống, làm trống những khoảng đầy và gãi những chỗ ngứa.',
	author:"Alice Roosevelt Longworth"	
},
{
//5
	quote:'Chúng ta không nên bỏ cuộc, chúng ta không nên đề những khó khăn đánh bại mình.',
	author:"A. P. J. Abdul Kalam"	
},
{
//6
	quote:'Nghèo không là xấu, nghèo mà không có chí mới là xấu; hèn không đáng ghét, hèn mà không có tài mới đáng ghét; già không nên than thở, già mà sống thừa mới đáng than thở; chết không nên bi ai, chết mà vô bổ mới đáng bi ai.',
	author:"Lã Khôn."	
},
{
//7
	quote:'Cuộc sống chỉ mang lại cho chúng ta 10% cơ hội, 90% còn lại là do chúng ta trải nghiệm thế nào với nó.',
	author:"Lou Holtz"	
},
{
//8
	quote:'Người khôn ngoan là kẻ mà cái gì cũng thấy mới lạ.',
	author:"Khuyết danh"	
},
{
//9
	quote:'Ruồi chết vì mật ngọt. Đàn bà chết vì đàn ông khéo. Đàn ông chết vì đàn bà đẹp. Còn cha mẹ chết vì con bất hiếu.',
	author:"Khuyết danh"	
},
{
//10
	quote:'Mỗi người có thể có những lý do khác nhau để sống cuộc sống của chính họ. Bạn không thể quy chụp tất cả những lý do đó đều giống như nhau.',
	author:"Kevin Spacey."	
},
{
//11
	quote:'Hôm nay đầy rẫy những khó khăn, và ngày mai cũng không có điều gì dễ dàng. Nhưng sau ngày mai, mọi thứ sẽ trở nên tốt đẹp.',
	author:"Jack Ma."	
},
]
function getQuote() {
	return quotes[Math.floor(Math.random()*quotes.length)];
}
function makeQuote(){
	var quote=getQuote();
	document.getElementById('quote').innerText=quote.quote;
	document.getElementById('author').innerText=quote.author;
}
window.onload=makeQuote();