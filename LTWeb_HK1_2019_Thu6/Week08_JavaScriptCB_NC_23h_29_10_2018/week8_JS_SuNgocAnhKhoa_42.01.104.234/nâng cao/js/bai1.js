function PhanTich(){
	var a = document.getElementById("HoTen").value;
	var b="";
	var c="";
	var e =0;
	var d =0;
	var f="";
	for(var i=0;i<a.length;i++){
		if(a.charAt(i)!=" "){
			b+=a.charAt(i);
		}
		else{
			e=i;
			break;
		}
	}
	for(var j=a.length -1;j>= 0;j--){
		if(a.charAt(j)==" "){
			d = j;
			break;
		}
	}
	for(var i=d; i<a.length;i++){
		c+=a.charAt(i);
	}
	for(var i=e+1;i<d;i++){
		f+=a.charAt(i);
	}
	document.getElementById("Ho").innerHTML = b;
	document.getElementById("Lot").innerHTML = f;
	document.getElementById("Ten").innerHTML = c;
}	
