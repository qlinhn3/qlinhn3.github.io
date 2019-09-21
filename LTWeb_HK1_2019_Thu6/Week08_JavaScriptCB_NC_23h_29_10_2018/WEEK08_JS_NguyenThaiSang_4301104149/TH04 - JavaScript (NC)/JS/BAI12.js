// size-min = 20
// size-max = 45
Update = ()=>{
  let date = (new Date())
  SaySomeThing(date.getHours())
  let d = date.toTimeString()
  for (var i = 0; i < 8; i++) {
    SetTime(i,d[i])
  }
}
Update_ = () => {
  Say.style.fontSize = '45px'
    Say.style.lineHeight = '5px'
    Say.style.color = "red";
  setTimeout(()=>{
    Say.style.fontSize = '20px';
    Say.style.lineHeight = '45px';
    Say.style.color = "black";
  },1000)
}
SaySomeThing = (hour)=>{
  if(0<=hour && hour<12)
    Say.innerHTML = 'Chào buổi sáng'
  else if(12<=hour && hour<17)
    Say.innerHTML = 'Chào buổi chiều'
  else
    Say.innerHTML = 'Chào buổi tối'
}
SetTime = (id,p)=>{
  if(id != 2 && id !=5)
  document.getElementById('_'+id).src='../images/0'+p+'.gif'
}
Update()
setInterval(Update,1000)
setInterval(Update_,2000)
