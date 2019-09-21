// Object Item = món ăn
function Item(_name,_price){
  this.name = _name;
  this.price = _price;
}
// get selected Item
Get = (arr)=>{
  for(i=0;i<thucAn.length;i++) if(thucAn[i].selected)
    arr.push(new Item(thucAn[i].innerHTML,thucAn[i].value))
  for(i=0;i<giaiKhat.length;i++) if(giaiKhat[i].selected)
    arr.push(new Item(giaiKhat[i].innerHTML,giaiKhat[i].value))
  if(khan.checked) arr.push(new Item(khan.value,1000))
  if(phong.checked) arr.push(new Item(phong.value,5000))
}
// add <type> to <to> with type.id = id type.innerHTML = inner
Add = (type,to,id,inner)=>{
  let td = document.createElement(type)
  if(id != null) td.id = id
  if(inner != null) td.innerHTML = inner
  document.getElementById(to).appendChild(td);
}
// Add tr
Add_tr=(index,item)=>{
  Add('tr','hoaDon','_'+index,null)
  Add('td','_'+index,null,index)
  Add('td','_'+index,null,item.name)
  Add('td','_'+index,null,item.price)
}

Make = (arr)=>{
  let sum =0;
  arr.forEach((item,index)=>{
    Add_tr(index,item)
    sum+=Number(item.price)
  })
  Add('tr','hoaDon','last',null)
  Add('td','last',null,null)
  Add('td','last',null,"Tổng Tiền")
  Add('td','last',null,sum)
}



tt.onclick = ()=>{
  arr = [];
  Get(arr);
  tongTien.innerHTML = "";
  // if(document.getElementById('hoaDon') == null) {
    Add('table','tongTien','hoaDon',null)
    Add('tr','hoaDon','thead',null)
    Add('td','thead','colspan','Hóa đơn tính tiền')
    colspan.colSpan = "3";
  // }
  Make(arr);
}
