phantich.onclick = ()=>{
  let a = HoTen.value.trim().indexOf(" ")
  let b = HoTen.value.trim().lastIndexOf(" ")
  var LastName = HoTen.value.trim().slice(0,a)
  var FirstName = HoTen.value.trim().slice(b,HoTen.value.length)
  var MiddleName = HoTen.value.trim().slice(a,b)
  Ho.innerHTML = LastName
  Lot.innerHTML = MiddleName
  Ten.innerHTML = FirstName
}
