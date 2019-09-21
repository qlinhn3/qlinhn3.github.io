var x = document.querySelector("#clock")
setInterval(()=> {
  var d =new Date()
  x.innerHTML = d.getHours() + ":" + d.getMinutes()+":"+d.getSeconds();
})
