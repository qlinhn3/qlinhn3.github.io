var mang=[];
	function taoMang() {
		// xoa mang cu
		if(mang.length>0)
			mang.length=0;
		var n = Math.floor(Math.random()*6)+5;
		var i;
		for (i=0;i<n;i++)
			mang.push(Math.floor(Math.random()*100)+1);
			return mang;
	}
	function sapXep(tang){
		if(tang)
			mang.sort(function(a,b ){return a-b});
		else
			mang.sort(function(a,b ){return b-a});
		return mang;
	}
	function thempt(viTri, giaTri){
		if(viTri==''||giaTri=='' ||
			isNaN(viTri) || isNaN(giaTri)|| viTri<0 || viTri>mang.length)
			alert("Please enter a number!");
		else
			mang.splice(viTri,0,giaTri);
		return mang;
	}