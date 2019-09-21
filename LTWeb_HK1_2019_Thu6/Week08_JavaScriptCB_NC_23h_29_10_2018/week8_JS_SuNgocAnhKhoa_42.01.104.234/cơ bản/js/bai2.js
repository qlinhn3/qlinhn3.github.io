	function ThongBao(){
		var name = prompt("Hãy nhập tên của bạn"," ");
		if (name != null) {
        document.getElementById("hienten").innerHTML =
        "Chào bạn " + name;
    	}
	}
	function DoiTen(){
		document.getElementById("hienten").innerHTML =
        "Chào bạn " + hoten.value;
	}
