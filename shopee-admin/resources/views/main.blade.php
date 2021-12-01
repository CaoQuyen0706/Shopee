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
    <div class="product">


        <div class="table-product">

        @yield('content')


        </div>
        <div class="pagination">
{{--            <div class="card-footer clearfix">{!! $products->links() !!}</div>--}}
        </div>
    </div>
</div>
<div class="footer">
    @include('footer')
</div>
</body>

</html>
