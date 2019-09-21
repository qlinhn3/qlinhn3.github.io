window.onload = () => {
    renderSingleProduct();
}

function renderSingleProduct() {
    let product = loadSingleProduct();
    document.querySelector('#single-product-site-map').textContent = product.name;
    document.querySelector('#single-product-img').setAttribute('src', `./img/${product.img}`);
    document.querySelector('#single-product-name').textContent = product.name;
    document.querySelector('#single-product-price').textContent = `${product.price} VNĐ`;
    document.querySelector('#single-product-des').textContent = product.des;
}

function loadSingleProduct() {
    let products = getProducsFromLocalStorage();
    let id = getParamUrl('id');
    let product = products.find(product => parseInt(product.id) === id);
    return product;
}


function getParamUrl(type) {
    const urlParams = new URLSearchParams(window.location.search);
    if (!urlParams.get(type)) {
        return 1;
    }
    let id = urlParams.get(type);
    return parseInt(id);
}

function getProducsFromLocalStorage() {
    if (!localStorage.getItem('bakeries')) {
        return;
    }
    let products = JSON.parse(localStorage.getItem('bakeries'));
    return products;
}

