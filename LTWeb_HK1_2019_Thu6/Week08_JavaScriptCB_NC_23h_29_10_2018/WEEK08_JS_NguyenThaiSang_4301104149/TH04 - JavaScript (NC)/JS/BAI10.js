Check = (str)=>{
  for (i in str)
    if(str[str.length - i-1] != str[i])
      return false
  return true
}

_.onclick = ()=>{
  if(Check(input.value)) output.innerHTML = 'chuỗi này đọc ngược xuôi đều giống nhau'
  else output.innerHTML = 'Chuỗi này đọc ngược xuôi không giống nhau'
}
