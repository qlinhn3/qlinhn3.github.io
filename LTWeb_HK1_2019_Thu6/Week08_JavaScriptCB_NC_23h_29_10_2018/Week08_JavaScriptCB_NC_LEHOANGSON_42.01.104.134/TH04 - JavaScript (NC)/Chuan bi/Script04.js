var mang=[];
function taoMang(){
		//delete array
		if(mang.length>0) {
			mangkq.innerHTML="Giá trị mảng sau khi xử lý";
			vitrithem.value="";
			giatri.value="";setInterval(function() {
				
			}, delay);
			mang.length=0;
		}

		var n=Math.floor((Math.random()*6)+5);
		for (var i = 0; i < n; i++) {
			mang.push(Math.floor((Math.random()*100)+1));
		}
		return mang;
	}
	function sapXep(value){
		if(value) mang.sort(function(a, b){return a - b});
		else mang.sort(function(a, b){return b - a});
		return mang;
	}
	// function themMang(){
	// 	var pos=document.forms["myForm"]["vitrithem"].value;
	// 	var val=document.forms["myForm"]["giatri"].value;
	// 	if(pos == '' || val =='' || isNaN(pos) || isNaN(val) || pos<0 || pos>mang.length)
	// 		alert("Please enter a number !!!")
	
	// 	else mang.splice(pos, 0, val);
	// 	return mang;
	// }

	function themMang(pos,val){
		if(pos == '' || val =='' || isNaN(pos) || isNaN(val) || pos<0 || pos>mang.length)
			alert("Please enter a number !!!")

		else mang.splice(pos-1, 0, val);
		return mang;
	}
