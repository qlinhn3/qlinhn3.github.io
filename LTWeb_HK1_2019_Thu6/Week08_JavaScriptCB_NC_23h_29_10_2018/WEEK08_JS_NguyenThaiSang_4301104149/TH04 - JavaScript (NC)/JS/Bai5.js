var xuat =document.getElementById('xuat');
_.onclick = ()=>{
  if(!La_so(A.value) || !La_so(B.value)) xuat.innerHTML = "error";
  else {
    xuat.innerHTML = Math.sqrt(Number(A.value) **2 + Number(B.value) **2);
  }
}
