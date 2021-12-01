@extends('main')

@section('content')
    <link rel="stylesheet" href="/template/css/cartstyle.css">
    <script src="/template/js/js.js"></script>
    <form action="" method="post">

        <div id="mid">
            @php
                $total = 0;
            @endphp
            <div class="mid-one">
                <div class="mid-cart">
                    @foreach($product as $key=>$product1)
                        @php

                            $price = $product1->price_sale != 0 ? $product1->price_sale : $product1->price;
                            $priceEnd = $price * $carts[$product1->id];
                            $total += $priceEnd;
                        @endphp
                        <div class="mid-sp">
                            <div class="mid-sp1">
                                <div class="mid-sanpham-detail">
                                    <div class="square2">

                                        <div><img src="{{ $product1->thumb }}" alt="" width="100px" style="padding-left: 20px;padding-right: 10px;"></div>
                                        <label for="c3" style="padding-top: 30px"><a href="" style="font-size: 15px">{{ $product1->name }}</a>

                                        </label>
                                    </div>
                                    <div class="phanloai"></div>
                                    <div class="mid-sp-detail">
                                        <div class="dongia">
                                            <div class="dongia1">₫{{ $product1->price }}</div>
                                            <div class="dongia2">₫{{ $product1->price_sale }}</div>
                                        </div>
                                        <div class="soluong" style="padding-left: 30px;">
                                            <div class="tang"><input onclick="var result = document.getElementById('quantity{{ $product1->id }}'); var qty = result.value; if( !isNaN(qty) &amp; qty > 1); result.value--;return false;" type='button' value='-' /></div>
                                            <div class="blank-tang-giam"><input id='quantity{{ $product1->id }}' min='1' name='quantity' type='text' value="{{ $carts[$product1->id] }}" /></div>
                                            <div class="giam"><input onclick="var result = document.getElementById('quantity{{ $product1->id }}'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" type='button' value='+' /></div>
                                        </div>
                                        <div class="sotien">
                                            <p>{{ $priceEnd }}</p>
                                        </div>
                                        <div class="thaotac">
                                            <div class="chucnang-xoa"><a href="/carts/delete/{{ $product1->id }}">Xóa</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                    <div class="mid-thanhtoan">

                        <div class="mid-thanhtoan3">
                            <div class="mid-thanhtoan3-left">
                                <div><input type="checkbox" name="cc" id="c3"></div>
                                <div class="chon-tat-ca"><a href="">Chọn Tất Cả </a></div>
                                <div class="xoa"><a href="">Xóa</a></div>
                                <div class="luu"><a href="">Lưu vào mục Đã th...</a></div>
                            </div>
                            <div class="mid-thanhtoan3-right">
                                <div class="tongthanhtoan">Tổng:</div>
                                <div class="Tien" style="font-size: 20px">₫{{ number_format($total, 0, '', '.') }}</div>
                                <input type="submit" value="Mua Hàng" formaction="/update-cart">
                                <p style="color: white">|</p>
                                <input type="submit" value="Cập Nhật" formaction="/update-cart">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </form>
@endsection
