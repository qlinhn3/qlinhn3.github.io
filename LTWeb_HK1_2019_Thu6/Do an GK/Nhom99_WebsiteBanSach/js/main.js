

jQuery(document).ready(function($){
    // jQuery sticky Menu
    
	$(".mainmenu-area").sticky({topSpacing:0});
    
    $('.product-carousel').owlCarousel({
        loop:true,
        nav:true,
        margin:20,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:3,
            },
            1000:{
                items:5,
            }
        }
    });  
    
    $('.related-products-carousel').owlCarousel({
        loop:true,
        nav:true,
        margin:20,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:2,
            },
            1200:{
                items:3,
            }
        }
    });  
    
    $('.brand-list').owlCarousel({
        loop:true,
        nav:true,
        margin:20,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:3,
            },
            1000:{
                items:4,
            }
        }
    });    
    
    $('div.owl-prev').html("<<");
    $('div.owl-next').html(">>");
    
    // Bootstrap Mobile Menu fix
    $(".navbar-nav li a").click(function(){
        $(".navbar-collapse").removeClass('in');
    });    
    
    // jQuery Scroll effect
    $('.navbar-nav li a, .scroll-to-up').bind('click', function(event) {
        var $anchor = $(this);
        var headerH = $('.header-area').outerHeight();
        $('html, body').stop().animate({
            scrollTop : $($anchor.attr('href')).offset().top - headerH + "px"
        }, 1200, 'easeInOutExpo');

        event.preventDefault();
    });    
    
    // Bootstrap ScrollPSY
    $('body').scrollspy({ 
        target: '.navbar-collapse',
        offset: 95
    })    
    

    
// Quản lý giỏ hàng
    /* Cấu trúc của biến cart dùng để lưu trữ dữ liệu của giỏ hàng:
        cart = {
            total: *total,
            amount_product: *amout product,
            list_book: [
                {
                    name: *name,
                    price: *price,
                    img: *url image
                },
                {
                    name: *name,
                    price: *price,
                    img: *url image
                }
            ]
        }
    */
    var cart =JSON.parse(localStorage.getItem("cart"));
    setTimeout(console.log(cart),0);

    // Hiển thị total và amount trên icon giỏ hàng
    function changeDisplayIconCart(){
        $(".cart-amount").html("$"+cart.total);
        $(".product-count").html(cart.amount_product);
    }
    changeDisplayIconCart();
    
    // Thêm sách vào giỏ hàng
    function addBook(name, price, img){
        if(!isNaN(price)){
            cart.total += price*1;
            cart.amount_product+=1;
            cart.list_book.push({
                name: name,
                price: price,
                img: img
            });
            localStorage.setItem("cart",JSON.stringify(cart));
            console.clear()
            console.log("ADD_NEW_BOOK !!");
            console.log(cart);
            changeDisplayIconCart();
        }
    }

    // Xóa sách khỏi giỏ hàng
    function removeBook(key){
        cart.total -= cart.list_book[key].price*1;
        cart.amount_product -= 1;
        cart.list_book.splice(key,1);
        localStorage.setItem("cart",JSON.stringify(cart));
        console.clear();
        console.log("REMOVE_A_BOOK !!! ");
        console.log(cart);
    }

    $(".add-to-cart-link").on('click', function(){
        var name = $(this).attr("data-name");
        var price = $(this).attr("data-price");
        var img = $(this).attr("data-urlImg");
        addBook(name, price, img);
    });

    $(".add_to_cart_button").on('click', function(){
        var name = $(this).attr("data-name");
        var price = $(this).attr("data-price");
        var img = $(this).attr("data-urlImg");
        addBook(name, price, img);
    });

    // Danh sách hàng trong giỏ ở trang Giỏ Hàng và trang Thanh Toán
    var pageCart = $("body.pageCart");
    var pageCheckOut = $("body.pageCheckOut");
    if(pageCart[0] != undefined || pageCheckOut[0] != undefined ) {
        cart.list_book.forEach(function(book, index){
            var key= index;
            var img= book.img;
            var name= book.name;
            var price= book.price;
            
            
            var a_product_remove = document.createElement("A"); // Tạo thẻ html <a></a>
                a_product_remove.appendChild(document.createTextNode("x")); // <a>x</a>
                a_product_remove.setAttribute("data-key", key); //<a data-key=*key>x</a> 
                a_product_remove.setAttribute("href","#");  // <a data-key=key href="#"> x </a>
                a_product_remove.setAttribute("class", "a-product-remove");
            var td_product_remove = document.createElement("TD");
                td_product_remove.classList.add("product-remove");
                td_product_remove.appendChild(a_product_remove);
                // <td class="product-remove">
                //      <a data-key=key class="remove" href="#"> x </a>
                // </td>


            var img_product_thumbnail = document.createElement("IMG");
                img_product_thumbnail.setAttribute("src", img);
            var a_product_thumbnail = document.createElement("A");
                a_product_thumbnail.setAttribute("href","#");
                a_product_thumbnail.appendChild(img_product_thumbnail);
            var td_product_thumbnail = document.createElement("TD");
                td_product_thumbnail.classList.add("product-thumbnail");
                td_product_thumbnail.appendChild(a_product_thumbnail);

            var a_product_name = document.createElement("A");
                a_product_name.appendChild(document.createTextNode(name));
                a_product_name.setAttribute("href","#");
            var td_product_name = document.createElement("TD");
                td_product_name.classList.add("product-name");
                td_product_name.appendChild(a_product_name);


            var span_product_price = document.createElement("SPAN");
                span_product_price.appendChild(document.createTextNode("$"+price));
            var td_product_price = document.createElement("TD");
                td_product_price.classList.add("product-price");
                td_product_price.appendChild(span_product_price);


            var tr = document.createElement("TR");
                tr.setAttribute("data-key", key);
                tr.appendChild(td_product_remove);
                tr.appendChild(td_product_thumbnail);
                tr.appendChild(td_product_name);
                tr.appendChild(td_product_price);

            var cart_list = document.getElementsByClassName("cart_item")[0]
                cart_list.insertBefore(tr, cart_list.firstChild);
        });

        // Hàm xử lý khi nhấn nút Xóa sản phẩm 
        $(".a-product-remove").on("click", function(target){
            // không load lại trang
            target.preventDefault();
            
            var key = $(this).attr("data-key");

            var cart_item = document.getElementsByClassName("cart_item")[0];
            
            for (let index = 0; index < cart_item.childNodes.length; index++) {
                var child = cart_item.childNodes[index];
                if(child.getAttribute("data-key") == key){
                    cart_item.removeChild(child);
                    removeBook(key);
                    break;
                }
            }
        }); 
        $(".total-bill").html("Tổng Cộng: $"+ cart.total);
            $("span.amount").html("$"+cart.total);
    }
    // Xử lý trang chi tiết sản phẩm
    var singleProduct = $(".pageSingleProduct");
    if(singleProduct != undefined){
        var product = {
            1: {
                name: "Đông Cung",
                price: 20,
                img: "img/sach-1.png"
            },
            2: {
                name: "Node.js Basic",
                price: 20,
                img: "img/sach-2.png"
            },
            3: {
                name: "Tư Duy Nhanh Và Chậm",
                price: 20,
                img: "img/sach-3.jpg"
            },
            4: {
                name: "Núi Xanh Nay Vẫn Đó",
                price: 20,
                img: "img/sach-4.png"
            },
            5: {
                name: "Đắc Nhân Tâm",
                price: 20,
                img: "img/sach-5.jpg"
            },
            6: {
                name: "Hạt Giống Tâm Hồn",
                price: 20,
                img: "img/sach-6.jpg"
            }
        }
        function changeSingleProductPage(){
            var id = localStorage.getItem("productID");
            $(".link-product-name").html(product[id].name);
            $(".single-product-name").html(product[id].name);
            $(".product-img").attr("src", product[id].img);
            $(".product-price").html("$"+product[id].price+".00");
            $(".add_to_cart_button.single-product").attr("data-name",product[id].name);
            $(".add_to_cart_button.single-product").attr("data-urlImg",product[id].img);
            $(".add_to_cart_button.single-product").attr("data-price",product[id].price);
        }
        changeSingleProductPage();
        $(".view-detail").on("click", function(){
            var id = $(this).attr("data-id");
            if(product[id] != undefined){
                localStorage.setItem("productID", id);
            }else{
                alert("productID = undefined")
            }
        });
    }
});

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'UA-10146041-21', 'auto');
    ga('send', 'pageview');


