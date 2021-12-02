@extends('main')

@section('content')
    <link rel="stylesheet" href="/template/css/detail.css">

    <div><h1></h1></div>
    <div class="product_detail">
        <div class="product-detail-item">
            <a href=""><img src="{{ $product->thumb }}" alt="" id="main-img"></a>
            <div class="sub-item">
            </div>
        </div>
        <div class="product-detail-content">
            <div class="product-detail-content-name">
                <div class="product-detail-content-item-yeuthich">Yêu Thích</div>
                <span>{{ $product->name }}</span>
            </div>
            <div class="product-detail-content-f">
                <div class="product-detail-content-f-star">
                    <a href="">
                        <h3>5.0</h3>
                        <i class="fas fa-star" style="color: #fe6433; font-size: 12px; "></i>
                        <i class="fas fa-star" style="color: #fe6433; font-size: 12px; "></i>
                        <i class="fas fa-star" style="color: #fe6433; font-size: 12px;"></i>
                        <i class="fas fa-star" style="color: #fe6433; font-size: 12px;"></i>
                        <i class="fas fa-star" style="color: #fe6433; font-size: 12px; "></i>
                    </a>
                </div>
                <div class="product-detail-content-f-feedback">
                    <a href="">
                        <h3>5.2k</h3>
                        <span>Đánh Giá</span>
                    </a>
                </div>
                <div class="product-detail-content-f-sold">
                    <h3>12.2k</h3>
                    <span>Đã Bán</span>
                </div>
            </div>
            <div class="product-detail-content-pr">
                <span>đ</span>
                <h3 style="text-decoration-line: line-through"> {{ $product->price }}</h3>
                <span>đ</span>
                <h3> {{ $product->price_sale }}</h3>

            </div>

            <div class="product-detail-content-soluong">
                <form action="/add-cart" method="post">
                    <div class="soluong" style="margin-left: 30px;">
                        <div class="tang"><input onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty) &amp; qty > 1 ) result.value--;return false;" type="button" value="-"></div>
                        <div class="blank-tang-giam"><input id="quantity" min="1" name="quantity" type="text" value="1"></div>
                        <div class="giam"><input onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" type="button" value="+"></div>
                    </div>
                    @if($product->price !== null)
                    <button type="submit" style="width: 101px;
                    height: 50px;">Thêm sản phẩm</button>
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    @endif
                    @csrf
                </form>
            </div>
            <div class="product-detail-content-shopping">

            </div>
        </div>
    </div>

    <div class="product-home-2">
        <div class="product-chitietsp">
            <div class="product-chitietsp-title">
                <h3>CHI TIẾT SẢN PHẨM</h3>
            </div>
            <div class="product-chitietsp-content">
                <p>{{ $product->description }}</p>
            </div>
            <div class="product-mota">
                <div class="product-chitietsp-title">
                    <h3>MÔ TẢ SẢM PHẨM</h3>
                </div>
                <div class="product-mota-content">
                    <span>
                        {!! $product->content !!}
                         </span>
                </div>
            </div>
        </div>
        <div class="product-news">
            <h3>Top Sản Phẩm Bán Chạy</h3>
            <div class="product-news-item">
                <img src="/template/img/op lung dien thoai iphon 6.jpg" alt="">
                <p>Tên sp</p>
                <span>đ 15.000</span>

            </div>
        </div>
    </div>
@endsection
