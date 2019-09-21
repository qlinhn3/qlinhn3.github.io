function trim(chuoi){
	var i=0;
	while(chuoi.charAt(i)==" "){
		i++;
	}
	var tmp = chuoi.substr(i,chuoi.length);
	i=tmp.length;
	while(tmp.charAt(i)==" "){
		i--;
	}
	var tmp2 = tmp.substr(0,i);
	return tmp2;
}
function phan_tich(chuoi){
	trim(chuoi);
	var first_space = chuoi.indexOf(" ");
	var last_space = chuoi.lastIndexOf(" ");
	document.getElementById("Ho").innerText = chuoi.substr(0,first_space);
	document.getElementById("Lot").innerText = chuoi.substr(first_space,last_space);
	document.getElementById("Ten").innerText = chuoi.substr(last_space,chuoi.length);
}