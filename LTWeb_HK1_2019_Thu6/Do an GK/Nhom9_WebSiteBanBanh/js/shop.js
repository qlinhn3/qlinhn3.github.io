window.onload = () => {
    loadBakery();
}

function Bakery(id, name, price, des, img) {
    this.id = id;
    this.name = name;
    this.price = price;
    this.des = des;
    this.img = img;
}

function loadBakery() {
    if (localStorage.getItem('bakeries')) {
        let bakeries = JSON.parse(localStorage.getItem('bakeries'));
        let product_list = document.querySelector('#product-list');
        bakeries.forEach(bakery => {
            createBakeryElement(product_list, bakery.id, bakery.name, bakery.price, bakery.img);
        });
    }
}

function createBakeryElement(product_list, id, name, price, img) {
    let col = document.createElement('div');
    let single_shop_product = document.createElement('div');
    let product_upper = document.createElement('div');
    let product_carousel_price = document.createElement('div');
    let product_option_shop = document.createElement('div');
    let bakeryImg = document.createElement('img');
    let h2 = document.createElement('h2');
    let bakeryName = document.createElement('a');
    let bakeryPrice = document.createElement('ins');

    bakeryImg.setAttribute('src', './img/' + img);
    bakeryName.innerText = name;
    bakeryName.setAttribute('href', `single-product.html?id=${id}`)
    bakeryPrice.innerText = price + ' VND';
    product_upper.setAttribute('class', 'product-upper');
    product_carousel_price.setAttribute('class', 'product-carousel-price');
    product_option_shop.setAttribute('class', 'product-option-shop');
    single_shop_product.setAttribute('class', 'single-shop-product');
    col.setAttribute('class', 'col-md-3 col-sm-6');

    product_upper.appendChild(bakeryImg);
    h2.appendChild(bakeryName);
    product_carousel_price.appendChild(bakeryPrice);
    product_option_shop.innerHTML = `<a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>`;

    single_shop_product.appendChild(product_upper);
    single_shop_product.appendChild(h2);
    single_shop_product.appendChild(product_carousel_price);
    single_shop_product.appendChild(product_option_shop);

    col.appendChild(single_shop_product);
    product_list.appendChild(col);
}