let Days = ['thứ hai','thứ ba','thứ tư','thứ năm','thứ sáu','thứ bảy','chủ nhật']
// console.log(new Date("2018/8/24").getDay())
Check = (item)=> {
  if(item.length == 0 ) return false;
  for(i=0;i<item.length;i++) if(item[i]<'0' || item[i]>'9') return false;
  return true;
}
_.onclick= ()=>{
  if(!Check(nam.value) || !Check(thang.value) || !Check(ngay.value)) {
    xuat.innerHTML = "error";
    return
  }
  let Time = nam.value + "/" + thang.value + "/" + ngay.value
  let str = Days[new Date(Time).getDay()]
  xuat.innerHTML = str+','+Time
  console.log(str+','+Time)
}

la_thang = (str)=>{
  Months = [
    'tháng một',
    'tháng hai',
    'tháng ba',
    'tháng bốn',
    'tháng năm',
    'tháng sáu',
    'tháng bảy',
    'tháng tám',
    'tháng chín',
    'tháng mười',
    'tháng mười một',
    'tháng mười hai'
  ]
  return Months[str.getMonth()+1]
}
console.log(la_thang(new Date()))
