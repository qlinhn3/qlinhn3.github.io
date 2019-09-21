La_so = (item)=>{
  if(item.length == 0 ) return false;
  for(i=0;i<item.length;i++) if(item[i]<'0' || item[i]>'9') return false;
  return true;
}
trim = (str)=>{
  return str.trim();
}
la_thu = (str)=>{
  let Days = ['Thứ hai','Thứ ba','Thứ tư','Thứ năm','Thứ sáu','Thứ bảy','Chủ nhật']
  let date = new Date(str);
  if(date != undefined) return Days[date.getDay()-1];
  else return undefined;
}
la_thang = (str)=>{
  Months = [
    'Tháng một',
    'Tháng hai',
    'Tháng ba',
    'Tháng tư',
    'Tháng năm',
    'Tháng sáu',
    'Tháng bảy',
    'Tháng tám',
    'Tháng chín',
    'Tháng mười',
    'Tháng mười một',
    'Tháng mười hai',
  ]
  return Months(str)
}
Add = (type,to,id,inner)=>{
  let td = document.createElement(type)
  if(id != null) td.id = id
  if(inner != null) td.innerHTML = inner
  document.getElementById(to).appendChild(td);
}
