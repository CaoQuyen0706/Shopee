<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
    <title>Shopee</title>
</head>

<body>
{{--header--}}
@include('header')
<div class="home">
    <div class="list">
        <div class="shop-seller">
            <div class="logo-shop-seller">
                <div class="blur"></div>
                <img src="/template/img/logo-shop-seller.jpg">
            </div>
            <div class="shop-like">
                <span>Yêu Thích +</span>
            </div>
            <div class="name-shop-seller">ỐP LƯNG IPHONE- SH...</div>
        </div>
        <div class="list-pro">
            <div class="list-pro-header">
                <span>DANH MỤC SHOP</span>
            </div>
            <div class="list-pro-body">
                <div class="list-pro-body-title">
                    <span>Sản Phẩm</span>
                </div>
                <div class="list-pro-body-product">
                    <a href="">💗 New Arrival 💗</a>
                    <a href="">💗 Top Bán Chạy 💗</a>
                    <a href="">⚡ Giá 5K Hủy Diệt ⚡</a>
                    <a href="">🔥 9K Hủy Diệt 🔥</a>
                    <a href="">💖 Size XR 💖</a>
                    <a href="">🍒 Cạnh Vuông 12 🍒</a>
                    <a href="">🍀 Ốp Bảo Vệ Cam 🍀</a>
                    <a href="">🎁 Ốp Trong Dẻo 🎁</a>
                    <a href="">🎉 Chất IMD Hịn Hò 🎉</a>
                    <a href="">🍊 Sọc Chất Varnish 🍊</a>
                    <a href="">🎈🎈Case Airpods 🎈🎈</a>
                    <a href="">🌈🌈 Phụ Kiện 🌈🌈</a>
                    <a href="">⭐ Trending 2021 ⭐</a>
                </div>
            </div>
        </div>
    </div>
    <div class="product">

        <div class="menu-sort-bar-pro">
            <span>Sắp xếp theo</span>
            <div class="menu-sort-bar-pro-sub">
                <ul class="menu-sort-bar-pro-sub-choose">
                    <a href="">Phổ Biến</a>
                </ul>
                <ul class="menu-sort-bar-pro-sub-choose">
                    <a href="">Mới Nhất</a>
                </ul>
                <ul class="menu-sort-bar-pro-sub-choose">
                    <a href="">Bán chạy</a>
                </ul>
                <ul class="menu-sort-bar-pro-sub-money">
                    <a href="">
                        <span>Giá</span>
                        <i style="color: #505050; margin-left: 115px;" class="fas fa-angle-down"></i>
                        <ul class="sub-money">
                            <li>
                                <a href="">Giá: Thấp đến cao</a>
                            </li>
                            <li>
                                <a href="">Giá: Cao đến thấp</a>
                            </li>
                        </ul>
                    </a>
                </ul>
            </div>
            <div class="menu-sort-bar-pro-mini-page">
                <div class="menu-sort-bar-pro-mini-page-state">
                    <span>1</span>
                    <span>/</span>
                    <span>12</span>
                </div>
                <form>
                    <button class="prev-next" type="">
                        <i class="fas fa-angle-left"></i>
                    </button>
                </form>
                <form>
                    <button class="prev-next" type="">
                        <i class="fas fa-angle-right"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="table-product">

{{--            <?php--}}
{{--            include('./connect_db.php');--}}
{{--            ?>--}}
{{--            <?php--}}
{{--            $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 10;--}}
{{--            $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;--}}
{{--            $offset = ($current_page - 1) * $item_per_page;--}}
{{--            $sqlsanpham = "SELECT * FROM products ORDER BY id ASC LIMIT " . $item_per_page . " OFFSET " . $offset . " ";--}}
{{--            $pro = mysqli_query($con, $sqlsanpham);--}}
{{--            $totalRecords = mysqli_query($con, "SELECT * FROM products ");--}}
{{--            $totalRecords = $totalRecords->num_rows;--}}
{{--            $totalPages = ceil($totalRecords / $item_per_page);--}}

{{--            ?>--}}
{{--            <?php while ($row = mysqli_fetch_array($pro)) { ?>--}}
            <div class="table-menu-product">
                <a href="">
                    <div class="menu-product-content-item">
{{--                        <img src="/template/img/<?php echo $row['image1'] ?>" alt="anh-san-pham">--}}
                        <img alt="anh-san-pham">
                    </div>
                    <div class="menu-product-content-detail">
                        <div class="menu-product-content-detail-name">
{{--                            <span><?= $row['name'] ?></span>--}}
                            <span>ten-san-pham</span>
                        </div>
                        <div class="menu-product-content-detail-price">
{{--                            <span>đ <?= number_format($row['price'], 0, ",", ".") ?></span>--}}
                            <span>đ gia-san-pham</span>
                            <img src="/template/img/icons8-free-shipping-50.png" alt="anh-san-pham">
                        </div>
                        <div class="menu-product-content-detail-sold">
                            <div class="menu-product-content-detail-sold-i">
                                <i class="far fa-heart"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span>Đã bán 12,2k</span>
                        </div>
                        <div class="menu-product-content-detail-address">
                            <span>Hà Nội</span>
                        </div>
                    </div>
                </a>
            </div>
<!--            --><?php //} ?>
        </div>
        <div class="pagination">
            <ul class="pagination-home-product-pagination">
                <!-- <li class="pagination-item">
                        <a href="#" class="pagination-item__link">
                        <i class="fas fa-angle-left" style="color:#505050;"></i>
                        </a>
                    </li>

                    <li class="pagination-item pagination-item--active">
                        <a href="#" class="pagination-item__link">1</a>
                    </li>
                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">2</a>
                    </li>
                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">3</a>
                    </li>
                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">4</a>
                    </li>
                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">5</a>
                    </li>
                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">...</a>
                    </li>
                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">14</a>
                    </li>

                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">
                        <i class=" fas fa-angle-right" style="color:#505050;"></i>
                        </a>
                    </li> -->
<!--                --><?php
//                include('pagination.php');
//                ?>
            </ul>
        </div>
    </div>
</div>
<div class="footer">
    @include('footer')
</div>
</body>

</html>
