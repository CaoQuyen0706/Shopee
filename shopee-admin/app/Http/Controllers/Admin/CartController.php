<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\CartService;
use Illuminate\Http\Request;

class CartController extends Controller
{

    protected $cart;

    public function __construct(CartService $cart)
    {
        $this->cart = $cart;
    }

    public function index()
    {
        return view('admin.cart.customer', [
            'title' => 'Danh sách Đơn đặt hàng',
            'customers' => $this->cart->getCustomer()
        ]);
    }
}
