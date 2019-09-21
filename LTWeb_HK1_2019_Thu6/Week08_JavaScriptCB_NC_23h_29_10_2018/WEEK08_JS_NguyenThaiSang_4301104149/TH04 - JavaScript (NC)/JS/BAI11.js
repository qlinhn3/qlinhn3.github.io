var tours ={
  'tour1' : [
  'Long Sơn Cổ Tự',
  'Biển Dốc Lếch',
  'Hòn Tằm, Hòn Mun',
  'Hồ cá Trí Nguyên',
  'Viện Hải Dương Học',
  'Suối Hoa Lan, Suối Tiên'],
  'tour2' : [
    'Tòa Bạch Dinh',
    'Thích Ca Phật Đài',
    'Núi Nghinh Phong'
  ],
  'tour3' : [
    'Đại Nội',
    'Lăng Tự Đức',
    'Chùa Thiên mụ',
    'Lăng Minh Mạng',
    'Lăng Khải Định',
    'Ngũ Hành Sơn',
    'Hội An',
    'Thánh địa Mỹ Sơn'
],
  'tour4' : [
    'Thủ đô Hà Nội',
    'Vịnh Hạ Long',
    'Casino Đồ Sơn ',
    'Tam Cốc Bích Động',
    'Cố đô Hoa Lư'
],
  'tour5' : [
  'Cố đô Hoa Lư',
  'Thác DraySap ',
  'Buôn Jun, hồ Lak',
  'Buôn Đôn',
  'Thủy điện Yaly'
]
}

ShowTour = (id)=>{
  /*******/group.innerHTML =""
  if(group.style.display == '')
    group.style.display = 'block'
  for (item of tours['tour'+id]) {
    Add('p','group',null,item)
  }
}
ConvertMoney = (str)=>{
  let k = 0;
  for (var i = 0; i < str.length; i++) {
    if(k == 3){
      str = str.substr(0,str.length-i) + ','+str.substr(str.length-i,str.length)
      k = 0;i++;
    }
    k++;
  }
  return str;
}
Get = ()=>{
  let ks = Number(document.querySelector('input[type="radio"]:checked').value);
  if(a.checked) ks+=Number(a.value)
  if(b.checked) ks+=Number(b.value)
  if(c.checked) ks+=Number(c.value)
  if(d.checked) ks+=Number(d.value)
  return ks
}
_.onclick = ()=>{
  let ks = Get()
  let x = document.querySelector('select[name="tour"]');
  if(x[0].value == 'Các tour') {
    output.innerHTML = 'Chọn tour'
    return;
  }
  let str = ConvertMoney((ks * x.value).toString());
  output.innerHTML = (str+ ' VND')
}

document.querySelector('select[name="tour"]').onchange = ()=>{
  let x = document.querySelector('select[name="tour"]');
  if(x[0].value == 'Các tour')
    x.remove(0);
  ShowTour(x.selectedIndex+1);
}
