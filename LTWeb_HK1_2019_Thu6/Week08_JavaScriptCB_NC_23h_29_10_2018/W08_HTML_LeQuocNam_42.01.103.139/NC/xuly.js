var mang=[];
	function taoMang() {
		if(mang.length>0)
			mang.length=0;
		var n= Math.floor(Math.random()*6)+5;
		var i;
		for(i=0;i<n;i++)
			mang.push(Math.floor(Math.random()*100)+1);
		return mang;
	}
	function sapXep(tang){
		if(tang==true)
			mang.sort(function(a,b){return a-b});
		else
			mang.sort(function(a,b){return b-a});
		return mang;
	}
	function thempt(vitri,giatri){
		if(vitri==''|| giatri==''||isNaN(vitri)||isNaN(giatri)||vitri<0||vitri>mang.length)
			alert("Please enter a number!");
		else
			mang.splice(vitri,0,giatri);
		return mang;
	}