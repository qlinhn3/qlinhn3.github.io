_.onclick = ()=>{
  let d = new Date(Inam.value+'-'+Ithang.value+'-'+Ingay.value)
  if(d != 'Invalid Date' && confirm('In Lịch')){
    nam.innerHTML = Inam.value
    thang.innerHTML = 'tháng ' + Ithang.value
    ngay.innerHTML = Ingay.value
    thu.innerHTML = la_thu(d);
    setInterval(()=>{SaySomeThing((new Date).getHours())},60*1000)
  }
}
SaySomeThing = (hour)=>{
  if(0<=hour && hour<12)
    Say.innerHTML = 'Chào buổi sáng'
  else if(12<=hour && hour<17)
    Say.innerHTML = 'Chào buổi chiều'
  else
    Say.innerHTML = 'Chào buổi tối'
}
