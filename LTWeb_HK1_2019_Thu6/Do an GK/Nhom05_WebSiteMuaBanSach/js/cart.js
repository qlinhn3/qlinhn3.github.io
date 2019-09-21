var arr =[];
var _money=0;

function Book(id,name,price){
  this.id = id;
  this.Name = name;
  this.Price = price;
}

(setUp=()=>{
  arr = JSON.parse(localStorage.getItem("Arr"));
  if(arr == null) arr=[];
  for (item of arr)
    _money += item.Price;
})();
add = (id,times)=>{
  for (var i = 0; i < Number(times); i++) {
    let name = data[i].name;
    let price = data[i].ins;
    _money += data[i].ins
    arr.push(new Book(id,name,price));
    addToNDB(arr);
    update(CartMoney,CartNumberProducts,_money,arr);
  }
}
addToNDB = arr=> localStorage.setItem("Arr",JSON.stringify(arr));
(()=>{
  for (var i = 0; i < 4; i++) {
    let id = Math.ceil(Math.random() * data.length-1);
    let d = data[id];
    let a = document.importNode(temp1.content.querySelector('div'), true);
    a.querySelector('img').src+=('/'+d.img);
    a.querySelector('a').innerHTML = d.name;
    a.querySelector('a').setAttribute('id',id);
    a.querySelector('ins').innerHTML = '$'+d.ins;
    if(d.del!=null) a.querySelector('del').innerHTML = '$'+d.del;
    temp1.before(a);
  }
})();
(()=>{
  for(let i=0;i<6;i++){
    let li = document.createElement('li');
    let a = document.createElement('a');
    let id = Math.ceil(Math.random() * data.length-1);
    a.innerHTML = data[id].name;
    a.setAttribute('id',id);
    li.appendChild(a);
    _get.appendChild(li)
  }
})();
(()=>{
  let items = JSON.parse(localStorage.getItem("Arr"));
  items.forEach((item,index)=>{
    let a = document.importNode(temp3.content.querySelector('tr'), true);
    a.setAttribute('id',index);
    a.querySelector('a').setAttribute('onclick','remove(this)');
    a.querySelector('img').src+='/'+data[item.id].img;
    a.querySelectorAll('a')[2].innerHTML = item.Name;
    a.querySelector('span').innerHTML = '$'+item.Price;
    temp3.before(a);
  })
  _carttotal.innerHTML = carttotal.innerHTML = total.innerHTML = '$'+_money;
})();
