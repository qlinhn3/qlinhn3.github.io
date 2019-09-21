function Xuat(){
	var s = prompt("Nhập một số","");
	while (isNaN(s)==true){
		s = prompt("Số nhập không hợp lệ!","");
	}
	var text = "";
	var i = 1;
	while (i < 10) {
    	text += s +" * "+ i +" = "+ s*i +"<br>";
    	i++;
	}
	document.getElementById("xuat").innerHTML = text;
}
