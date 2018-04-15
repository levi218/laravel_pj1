@extends('layouts.app')

@section('content')
<div class="store-wrap">
    <div class="store-top">
        <img src="./img/triangle.png" width="400" height="250">
        <div class="store-title">
            <h4>Store</h4>
            <p>Đổi điểm và đón nhận lợi ích</p>
        </div>
    </div>
    <div class="store-center">
        <h5>Bạn có XXX điểm</h5>
        <div class="products">
            <div class="row">
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 cart-1">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 product1">
                        <h6>Tên mặt hàng</h6>
                        <img src="./img/cart.png" width="100" height="80">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 product1-1">
                        <h6>XXX điểm</h6>
                        <p class="use">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 cart-2">
                    <div class="product2">
                        <h6>Tên mặt hàng</h6>
                        <img src="./img/cart1.png" width="110" height="80">
                        <h6>XXX điểm</h6>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 cart-3">
                    <div class="product3-1">
                        <h6>Tên mặt hàng</h6>
                        <h6>XXX điểm</h6>
                    </div>
                    <div class="product3-2">
                        <h6>Tên mặt hàng</h6>
                        <h6>XXX điểm</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 cart-4">
                    <div class="product2">
                        <h6>Tên mặt hàng</h6>
                        <img src="./img/cart2.png" width="110" height="80">
                        <h6>XXX điểm</h6>
                    </div>
                </div>
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 cart-1">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 product1">
                        <h6>Tên mặt hàng</h6>
                        <img src="./img/cart.png" width="100" height="80">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 product1-1">
                        <h6>XXX điểm</h6>
                        <p class="use">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 cart-6">
                    <div class="product6">
                        <h6>Tên mặt hàng</h6>
                        <img src="./img/cart.png" width="100" height="80">
                        <h6>XXX điểm</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="store-bottom">
        <h5 class="total-product">Toàn bộ sản phẩm</h5>
        <div class="row product-detail justify-content-between d-flex">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 mr-15 retail">
                <img src="./img/cart2.png" width="100" height="80" class="icon-cart">
                <h6>Tên mặt hàng</h6>
                <h6>XXX điểm</h6>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 mr-15 retail">
                <img src="./img/cart2.png" width="100" height="80" class="icon-cart">
                <h6>Tên mặt hàng</h6>
                <h6>XXX điểm</h6>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 mr-15 retail">
                <img src="./img/cart2.png" width="100" height="80" class="icon-cart">
                <h6>Tên mặt hàng</h6>
                <h6>XXX điểm</h6>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 mr-15 retail">
                <img src="./img/cart2.png" width="100" height="80" class="icon-cart">
                <h6>Tên mặt hàng</h6>
                <h6>XXX điểm</h6>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 retail">
                <img src="./img/cart2.png" width="100" height="80" class="icon-cart">
                <h6>Tên mặt hàng</h6>
                <h6>XXX điểm</h6>
            </div>
        </div>
    </div>
</div>
@endsection