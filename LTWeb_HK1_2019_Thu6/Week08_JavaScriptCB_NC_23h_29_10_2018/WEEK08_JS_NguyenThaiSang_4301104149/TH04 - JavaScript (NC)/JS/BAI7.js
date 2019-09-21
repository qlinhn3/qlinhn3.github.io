// .left -> marginLeft =540 -> 280
// .right -> marginLeft = 0 -> 280

Move = (id)=>{
  let x = document.getElementById(id);
  if(x.classList[1] == 'left') _(x);
  else __(x)
}
// move left
_ = (item)=>{
  item.style.marginLeft = 540;
  setTimeout(()=>{
    item.style.marginLeft = 280;
  },2500)
  item.classList.toggle('left')
}
// move right
__ = (item)=>{
  item.style.marginLeft = 0;
  setTimeout(()=>{
    item.style.marginLeft = 280;
  },2500)
  item.classList.toggle('left')
}
setTimeout(()=>{
  Move('td');
  Move('td2');
},200)

document.onclick=()=>{
  Move('td');
  Move('td2');
}
