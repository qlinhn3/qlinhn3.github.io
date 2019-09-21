function XuatChuoi(){
	var s1 = document.getElementById("Chuois").value;
	var s2 = document.getElementById("chtim").value;
	var s3 = document.getElementById("chthe").value;
	var i=0;
	while(s1.search(s2)!=-1){
		s1 = s1.replace(new RegExp(s2, 'g'),"<font style='color: #FFFFFF; background-color: #000099;'>"+ s3+"</font>" );
		i++;
	}
	if(i==0){
		alert("Không có chuỗi cần thay thế !");
	}
	document.getElementById("xuat").innerHTML = s1;
}
