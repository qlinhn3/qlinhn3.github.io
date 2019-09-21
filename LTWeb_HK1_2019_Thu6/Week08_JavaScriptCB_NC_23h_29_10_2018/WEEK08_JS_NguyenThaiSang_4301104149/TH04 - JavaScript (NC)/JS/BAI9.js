Replace = (nstr,ostr,fstr,rstr)=>{
  fstr = eval('/'+'dog'+'/g');
  rstr = '<span>'+rstr+'</span>'
  nstr.innerHTML = ostr.replace(fstr,rstr);
}
