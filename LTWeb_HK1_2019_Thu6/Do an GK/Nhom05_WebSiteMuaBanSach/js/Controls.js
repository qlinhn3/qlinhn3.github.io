// data json
// header global component
Update = () => localStorage.setItem("Arr",JSON.stringify(header.localstore));
pair = function(x,y){
  this.id = x;this.data = y
}
triple = function(x,y,z){
  this.id = x; this.Name = y;this.Price = z
}
Vue.component('top-menu',{
    template: `
    <div class="header-area">
        <div class="container">
          <div class="row">
          <div class="col-md-8">
            <div class="user-menu">
              <ul>
                <li><a href="#"><i class="fa fa-user"></i> Tài khoản</a></li>
                <li><a href="#"><i class="fa fa-heart"></i> Yêu thích</a></li>
                <li><a href="cart.html"><i class="fa fa-user"></i> Giỏ hàng</a></li>
                <li><a href="checkout.html"><i class="fa fa-user"></i> Thanh toán</a></li>
                <li id=User><a style="cursor:pointer"onclick="document.getElementById('id01').style.display='block'" ><i class="fa fa-user"></i> Đăng nhập</a></li>
              </ul>
            </div>
            <div id="id01" class="modal">

              <div class="modal-content animate" >
                <div class="imgcontainer">
                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

                </div>

                <div class="container">
                  <label for="uname"><b>Username</b></label>
                  <input type="text" placeholder="Enter Username" id="username" required>

                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" id=password required>

                  <button type="submit" onclick="Login(username.value,password.value)">Login</button>
                  <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                  </label>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                  <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
              </div>
            </div>
          </div>

            <div class="col-md-4">
              <div class="header-right">
                <ul class="list-unstyled list-inline">
                  <li class="dropdown dropdown-small">
                    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">USD</a></li>
                      <li><a href="#">INR</a></li>
                      <li><a href="#">GBP</a></li>
                    </ul>
                  </li>

                  <li class="dropdown dropdown-small">
                    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">VietNamese</a></li>
                      <li><a href="#">English</a></li>
                      <li><a href="#">French</a></li>
                      <li><a href="#">German</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    `
  })
Vue.component('cart',{
  props:{
    Number: {
      type:Number,
      default: 0
    },
    Money: {
      type:Number,
      default: 0
    }
  },
  template: `
    <div class="site-branding-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="shopping-item">
                <a href="cart.html">
                  Cart - <span class="cart-amunt">{{Money}}</span>
                  <i class="fa fa-shopping-cart"></i>
                  <span class="product-count">{{Number}}</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
  `
})
Vue.component('main-menu',{
  template:`
  <div class="mainmenu-area">
      <div class="container">
        <div class="row">
          <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
              </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.html">Trang chủ</a></li>
              <li><a href="shop_page.html">Danh sách</a></li>
              <li class="active"><a href="single-product.html">Sản phẩm</a></li>
              <li><a href="cart.html">Giỏ hàng</a></li>
              <li><a href="checkout.html">Checkout</a></li>
              <li><a href="#">Category</a></li>
              <li><a href="#">Others</a></li>
              <li><a href="Contact.html">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    `
})
// load cart
var header = new Vue({
  el:"header",
  data:{
    Number: 0,
    Money: 0,
    localstore : []
  },
  created:function(){
    this.localstore = JSON.parse(localStorage.getItem("Arr"))
    if(this.localstore != null)
      this.localstore.forEach(item=>{
        if(item!= null){
        this.Number++;
        this.Money+=Number(item.Price);
        }
      })
    else this.localstore = []
  },
  methods:{
    add: function(id,item,Number){

      while(Number--){
        this.Number++;
        this.Money+=item.ins;
        this.localstore.push(new triple(id,item.name,item.ins))
      }
      Update();
    },
  },
  components:{
    "top-menu":{
        props:{
          unshowCart: Boolean,
          number : Number,
          money: Number
        },
        template:`
        <header>
          <top-menu></top-menu>
          <cart v-if="!unshowCart" :Money=money :Number=number></cart>
          <main-menu></main-menu>
        </header>`
    }
  }
})
// main global component
Vue.component('common-left-search-bar',{
  template:`
  <div class="single-sidebar">
      <h2 class="sidebar-title">Search Products</h2>
      <form action="" method='get'>
          <input type="text" placeholder="Search products...">
          <input type="submit" value="Search">
      </form>
  </div>`
})
Vue.component('common-left-products',{
  data: function(){
    return {
      items: []
    }
  },
  created: function(){
    for (var i = 0; i < 4; i++) {
      let id = Math.ceil(Math.random() * data.length-1);
      this.items.push(new pair(id,data[id]))
    }
  },
  methods:{
    rightpath : (imgpath) => "../img/"+imgpath,
  },
  template:`
  <div class="single-sidebar">
    <h2 class="sidebar-title">Products</h2>
    <div class="thubmnail-recent" v-for="item in items">
      <img v-bind:src="rightpath(item.data.img)" class="recent-thumb" alt="">
       <h2><a href="#" v-bind:id=item.id onclick="main.id = this.id">{{item.data.name}}</a></h2>
       <div class="product-sidebar-price">
           <ins v-text="'$'+item.data.ins"></ins> <del v-if="item.data.del!=null" v-text="'$'+item.del"></del>
       </div>
    </div>
  </div>
  `
})
Vue.component('common-left-recent',{
  data: function(){
    return {
      items: []
    }
  },
  created: function(){
    for (var i = 0; i < 6; i++) {
      let id = Math.ceil(Math.random() * data.length-1);
      this.items.push(new pair(id,data[id]))
    }
  },
  template:`
  <div class="single-sidebar">
      <h2 class="sidebar-title">Recent Posts</h2>
      <ul>
        <li v-for='item in items'><a href="#" :id=item.id onclick="main.id = this.id">{{item.data.name}}</a></li>
      </ul>
  </div>`
})

Vue.component('uncomon-product-title',{
  props: ['item'],
  template: `
  <div class="product-breadcroumb">
    <a href="">Home</a>
    <a href="">Category Name</a>
    <a href="" v-text=item.name></a>
  </div>`
})
Vue.component('uncomon-product-img',{
  data: function(){
    return {
      data: data
    }
  },
  props:{
    temp: Object,
    id: Number
  },
  methods:{
    rightpath : (imgpath) => "../img/"+imgpath,
  },
  template:`
    <div class="col-sm-6">
      <div class="product-images">
          <div class="product-main-img">
              <img id=id v-bind:src="rightpath(temp.img)" alt="" style="border:2px solid black">
          </div>
          <div class="product-gallery">
            <img v-bind:src="rightpath(data[(id-1<0)?data.length-1:id-1].img)" alt="">
            <img v-bind:src="rightpath(data[(id-2<0)?data.length-1:id-2].img)" alt="">
          </div>
      </div>
    </div>
      `
})
Vue.component('uncomon-product-detail',{
  data: function(){
    return {
      times :1
    }
  },
  props:['item','id'],
  methods:{
    add: header.add
  },
  template:`
  <div class="col-sm-6">
    <div class="product-inner">
        <h2 class="product-name" v-text="item.name"></h2>
        <div class="product-inner-price">
            <ins v-text="'$'+item.ins"></ins>
        </div>

            <div class="quantity">
                <input type="number" size="4" v-model="times" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
            </div>
            <button @click=add(id,item,times) class='add_to_cart_button' v-on:submit=''>Thêm</button>

        <div class="product-inner-category">
            <p>Category: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
        </div>
        <div role="tabpanel">
            <ul class="product-tab" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="home">
                    <h2>Product Description</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.</p>
                    <p>Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.</p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="profile">
                    <h2>Reviews</h2>
                    <div class="submit-review">
                        <p><label for="name">Name</label> <input name="name" type="text"></p>
                        <p><label for="email">Email</label> <input name="email" type="email"></p>
                        <div class="rating-chooser">
                            <p>Your rating</p>
                            <div class="rating-wrap-post">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                        <p><input type="submit" value="Submit"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>`
})

Vue.component('uncommon-right-bottom',{
  data:function() {
    return {
      items:[],
      data: data,
      localstore : header.localstore
    }
  },
  created: function(){
    for (var i = 0; i < 6; i++) {
      let id = Math.ceil(Math.random() * data.length-1);
      this.items.push(new pair(id,data[id]))
    }
  },
  methods:{
    rightpath : (imgpath) => "../img/"+imgpath,
    add: header.add,
    changeId: (id)=>{main.id = id}
  },
  template: `
  <div class="related-products-wrapper">
    <h2 class="related-products-title">Related Products</h2>
    <div class="related-products-carousel">

        <div class="single-product" v-for="item in items">
          <div class="product-f-image">
            <img v-bind:src="rightpath(item.data.img)" alt="">
            <div class="product-hover">
              <a @click="add(item.id,data[item.id],1)" v-bind:id=item.id class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
              <a class="view-details-link" @click="changeId(item.id)"><i class="fa fa-link"></i> See details</a>
            </div>
          </div>

          <h2><a href="">{{item.data.name}}</a></h2>

          <div class="product-carousel-price">
            <ins v-text="'$'+item.data.ins"></ins> <del v-if="item.data.del!=null" v-text="'$'+item.data.del"></del>
          </div>
        </div>
      </template>
    </div>
  </div>
  `
})
Vue.component('uncommon-right',{
  props:['item','id'],
  template:`
  <div class="col-md-8">
    <div class="product-content-right">
      <uncomon-product-title v-bind:item=item></uncomon-product-title>
      <div class="row">
        <uncomon-product-img v-bind:temp=item v-bind:id=id></uncomon-product-img>
        <uncomon-product-detail v-bind:item=item v-bind:id=id></uncomon-product-detail>
        <uncommon-right-bottom></uncommon-right-bottom>
      </div>
    </div>
  </div>
  `
})


var main = new Vue({
  el:'main',
  data: {
    localstore: header.localstore,
    id: 1,
    data: data
  },
  methods:{
    getData: function(id){
      return this.data[id]
    }
  },
  components: {
    'common-left': {
      props:['item','id'],
      template:`
        <div class="col-md-4">
          <common-left-search-bar></common-left-search-bar>
          <common-left-products></common-left-products>
          <common-left-recent></common-left-recent>
        </div>
      `
    }
  }
})
