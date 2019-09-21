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
(update = ()=>{
  CartMoney.innerHTML = '$'+_money;
  CartNumberProducts.innerHTML = arr.length;
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
    a.setAttribute('href','./single-product.html?id='+id)
    li.appendChild(a);
    _get.appendChild(li)
  }
})();
