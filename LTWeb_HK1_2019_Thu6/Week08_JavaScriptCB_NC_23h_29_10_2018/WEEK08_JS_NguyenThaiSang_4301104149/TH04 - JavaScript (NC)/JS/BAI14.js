let day;
let check=false;

CreateCell=(row,cn,inner='',nam,thang)=>{
  let cell = row.insertCell()
  if(isValidDate(day,thang,nam)) cell.innerHTML = day;
  else cell.innerHTML = ""
  if(cn != "") cell.classList.add(cn);
  if(check==true && new Date().getDate()==day) cell.classList.add('current')
  day++;
}

CreateRow=(table,nam,thang)=>{
  let row = table.insertRow();
  CreateCell(row,'_0',day,nam,thang)
  for (var i = 0; i < 5; i++)
      CreateCell(row,'',day,nam,thang)
  CreateCell(row,'_6',day,nam,thang)
}

InLich= (nam,thang)=>{
  XoaLich()
  day = 1 - new Date(nam+'-'+thang+'-1').getDay();
  for (var i = 0; i < 5; i++)
    CreateRow(lich,nam,thang)
  if(isValidDate(day,thang,nam)) CreateRow(lich,nam,thang)

}
XoaLich=()=>{
  while (lich.rows.length>1)
    lich.deleteRow(1);
}

var daysInMonth = function (m, y) {
    switch (m) {
        case 1 :
            return (y % 4 == 0 && y % 100) || y % 400 == 0 ? 29 : 28;
        case 8 : case 3 : case 5 : case 10 :
            return 30;
        default :
            return 31
    }
};

var isValidDate = function (d, m, y) {
    m = parseInt(m, 10) - 1;
    return m >= 0 && m < 12 && d > 0 && d <= daysInMonth(m, y);
};

nam.value = new Date().getFullYear();
thang.value = new Date().getMonth()+1;

check = nam.value == new Date().getFullYear() && thang.value == new Date().getMonth()+1
InLich(nam.value,thang.value)

nam.onchange = ()=>{
  if(nam.value != "" && thang.value !=""){
    check = nam.value == new Date().getFullYear() && thang.value == new Date().getMonth()+1
    InLich(nam.value,thang.value)
  }
}

thang.onchange = ()=>{
  if(nam.value != "" && thang.value !=""){
    check = nam.value == new Date().getFullYear() && thang.value == new Date().getMonth()+1
    InLich(nam.value,thang.value)
  }
}
