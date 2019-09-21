function TinhCH(a,b){
	var ch;
	a = Number(a);
	b = Number(b);
	if(a==''||b==''|| isNaN(a) || isNaN(b) || a<1|| b<1){
		ch =0;
	}
	else{
		ch = Math.sqrt(Math.pow(a,2)+ Math.pow(b,2));
	}
	var c = ch.toFixed(0);
	document.getElementById("xuat").innerHTML = "= " + c;
}	
