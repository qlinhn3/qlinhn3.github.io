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
addToNDB = arr=> localStorage.setItem("Arr",JSON.stringify(arr));
(()=>{
  for (var i = 0; i < data.length / 8 ; i++) {
    var x = document.createElement('li')
    var a = document.createElement('a');
    a.setAttribute('onclick','changePage(this.innerHTML-1)');
    a.innerHTML = i+1;
    x.appendChild(a);
    addLi.before(x);
  }
})();

makeContainer=(time)=>{
  if(time==0) return;
  var x = document.createElement('div');
  x.classList.add("col-md-3","col-sm-4","get");
  document.getElementById('addsomething').appendChild(x);
  makeContainer(time-1);};
makeNode=(id,object,row)=>{
  let temp = document.getElementsByTagName("template")[0];
  let item = temp.content.querySelector("div");
    let a = document.importNode(item, true);
    a.querySelector('img').src+=('/'+object.img);
    a.querySelector('a').innerHTML = object.name;
    a.querySelector('a').setAttribute('id',id);
    a.querySelector('a').setAttribute('href','./single-product.html'+'?id='+id)
    a.querySelector('ins').innerHTML='$'+object.ins;
    if(object.del!=null)
      a.querySelector('del').innerHTML='$'+object.del;
    document.getElementsByClassName('get')[row].appendChild(a);
};
changePage(0)
function changePage(page){
  document.getElementById('addsomething').innerHTML ="";
  makeContainer(4);
  try{
    for (var i = page*8; i < (page+1)*8; i++) {
      makeNode(i,data[i],i%4);
    }
  }catch{
    return;
  }
};

Add=(item)=>{
  let id = item.parentElement.parentElement.querySelector('a').id;
  let name = item.parentElement.parentElement.querySelector('a').innerHTML;
  let price = item.parentElement.parentElement.querySelector('ins').innerHTML;
  _money += Number(price.slice(1));
  arr.push(new Book(id,name,Number(price.slice(1))));
  addToNDB(arr);
  update(CartMoney,CartNumberProducts,_money,arr);
}
