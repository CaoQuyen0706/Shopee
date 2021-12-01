@extends('main')

@section('content')
    <link rel="stylesheet" href="/template/css/detail.css">
    <div class="product_detail">
        <div class="product-detail-item">
            <a href=""><img src="/template/img/vo case bao ve tai nghe 1.jpg" alt="" id="main-img"></a>
            <div class="sub-item">
                <img src="/template/img/vo case bao ve tai nghe 1.jpg" alt="">
                <img src="/template/img/vo case bao ve tai nghe 2.jpg" alt="">
                <img src="/template/img/vo case bao ve tai nghe 3.jpg" alt="">
                <img src="/template/img/vo case bao ve tai nghe 4.jpg" alt="">

            </div>
        </div>
        <div class="product-detail-content">
            <div class="product-detail-content-name">
                <div class="product-detail-content-item-yeuthich">Yêu Thích</div>
                <span>Tên Sp</span>
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
                <h3> 120.000</h3>
                <a href="">33% GIẢM</a>
            </div>
            <div class="product-detail-content-mafree">
                <span>Mã Giảm Giá Của Shop</span>
                <a href="">15% GIẢM</a>
                <a href="">10% GIẢM</a>
                <a href="">10% GIẢM</a>
                <a href="">GIẢM 15K</a>
                <div class="product-detail-content-mafree-meetall">
                    <a href="">Xem tất cả
                        <i class="fa fa-angle-down fa-w-10"></i>
                    </a>
                </div>
            </div>
            <div class="product-detail-content-soluong">
                <span>Số Lượng</span>
                <div class="soluong" style="margin-left: 30px;">
                    <div class="tang"><input onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty) &amp; qty > 1 ) result.value--;return false;" type="button" value="-"></div>
                    <div class="blank-tang-giam"><input id="quantity" min="1" name="quantity" type="text" value="1"></div>
                    <div class="giam"><input onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" type="button" value="+"></div>
                </div>
                <span>10.600 sản phẩm sẵn có</span>
            </div>
            <div class="product-detail-content-shopping">
                <div class="product-detail-content-shopping-cart">
                    <a href="">
                        <i class="fas fa-cart-plus"></i>
                        Thêm Vào Giỏ Hàng
                    </a>
                </div>
                <div class="product-detail-content-shopping-buy">
                    <a href="">Mua Ngay</a>
                </div>
            </div>
        </div>
    </div>

    <div class="product-home-2">
        <div class="product-chitietsp">
            <div class="product-chitietsp-title">
                <h3>CHI TIẾT SẢN PHẨM</h3>
            </div>
            <div class="product-chitietsp-content">
                <ul>
                    <span>Danh mục</span>
                    <p>Shopee Mobile &amp; Gadgets Batteries, Cables &amp; Charger Others</p>

                </ul>
                <ul>
                    <span>Kho hàng</span>
                    <p>10600 sản phẩm</p>

                </ul>
                <ul>
                    <span>Gửi từ</span>
                    <p>Gửi từ</p>
                </ul>
            </div>
            <div class="product-mota">
                <div class="product-chitietsp-title">
                    <h3>MÔ TẢ SẢM PHẨM</h3>
                </div>
                <div class="product-mota-content">
                    <span>
                        Dây quấn bảo vệ cáp sạc, tai nghe 10 màu chống đứt gãy 5/5s/6/6plus/6s/6s plus/6/7/7plus/8/8plus/x/xs/xs max/11/11 pro/11 promax – Shin Case

                        Shin Case đảm bảo:
                        - Mang lại cho quý khách những sản phẩm tốt nhất, đẹp nhất.
                        - Nếu hàng bị lỗi do sản xuất. Shin Case cam kết sẽ hoàn tiền hoặc gửi lại sản mới thay thế cho quý khách.
                        - Thương hiệu tạo niềm tin!

                        Mô tả sản phẩm:
                        - Thiết kế: Dây quấn
                        - Chất liệu: nhựa
                        - Dòng máy tương thích: Tất cả dòng máy
                        - Xuất xứ: Việt Nam

                        Quý khách lưu ý:
                        - Khi đặt hàng Quý khách vui lòng ghi chú vào đơn hàng khi cần có thêm thông tin như : màu sắc, kiểu, dáng thời gian Quý khách có thể nhận hàng.
                        - Khi nhận được hàng Quý khách vui lòng bỏ chút thời gian để đánh giá cho shop, để shop có chiều hướng phục vụ tốt hơn cho Quý khách.
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
