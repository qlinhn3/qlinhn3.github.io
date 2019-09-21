 function filterFunction() {
        var input, filter,div, a, i;
        input = document.getElementById("myInputSearch");//đi tới input
        filter = input.value.toUpperCase();//lấy giá trị thẻ input
        div = document.getElementById("myDropdownSearch");
        a = div.getElementsByTagName("a");//lấy các giá trị của thẻ a
        for (i = 0; i < a.length; i++) {
            if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    //Xét từng cái với giá trị người dùng vừa nhập vào
                    //Nếu giống với giá trị trong thẻ a thì để lại 
                    a[i].style.display = "block";
            } else {
                    //Ngược lại thì ẩn đi
                    a[i].style.display = "none";
                }
            }
        }   
function showResult(){
     resultSearch.style.display="block";
}
function hideResult(){
    resultSearch.style.display="none";
    
}