var arr = [];

document.querySelector('#button_1').onclick = function(){
  let _ = document.querySelector('input[name="kieusx"]:checked')
  arr.length = 0;
  for(i = 0;i<Math.random() * 30;i++)
    arr.push(Math.ceil(Math.random() * 100))
  document.getElementById('mangbd').innerHTML = arr;
  update(_.value);
}

function update(s){
  if(s == "tang") arr.sort();
  else if(s == "giam") arr.sort((a,b)=>b-a)
  document.getElementById('mangkq').innerHTML = arr;
}

Add = function(_,__){
  let _1 = document.querySelector('input[name="kieusx"]:checked')
  console.log(_,__)
  if(_ == "" && __ == "" || _ > arr.length || _ < 0 ) return;
  else if(_=="") arr.push(__)
  else arr.splice(_,0,__)
  update()
}
