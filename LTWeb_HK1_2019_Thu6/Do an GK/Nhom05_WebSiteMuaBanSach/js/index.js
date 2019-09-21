var arr = [];
var _money = 0;

addToNDB = arr=> localStorage.setItem("Arr",JSON.stringify(arr));

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

Add=(item)=>{
  let id = item.parentElement.parentElement.parentElement.childNodes[3].childNodes[0].id;
  let name = item.parentElement.parentElement.parentElement.childNodes[3].childNodes[0].innerHTML;
  let price = item.parentElement.parentElement.parentElement.childNodes[5].childNodes[1].innerHTML;
  _money += Number(price.slice(1))
  arr.push(new Book(id,name,Number(price.slice(1))));
  addToNDB(arr);
  update(CartMoney,CartNumberProducts,_money,arr);
}
