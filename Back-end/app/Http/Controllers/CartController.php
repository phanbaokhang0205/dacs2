<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function addcart($key)
    {
        if (!empty($key)) {
            $this->additemcart($key, 1);
            // Session::flash('success', 'Thêm vào giỏ hàng thành công!');
            return redirect()->back()->with('success','Added product to cart successfully!');
        }
    }

    public function updatecart(Request $request)
    {
        $new_qty_list = $request->newqty;
        $cart = Session::get('cart');
        foreach ($new_qty_list as $key => $qty) :
            if ($cart[$key]['qty'] != $qty) :
                $this->updateitemcart($key, $qty);
            endif;
        endforeach;
        return redirect()->route('listcart');
    }

    public function additemcart($key, $quantity)
    {
        // create a table of products
        $cart = Session::get('cart');
        $products = [];
        $productList = DB::table('products')->get();
        if (!empty($productList)) :
            foreach ($productList as $product) :
                $products[$product->productID] = array('name' => $product->productName, 'cost' => $product->listPrice, 'img' => $product->productImage);
            endforeach;
        endif;

        if ($quantity < 1) return redirect()->route('homepage');

        if (isset($cart[$key])) {
            $quantity += $cart[$key]['qty'];
            $this->updateitemcart($key, $quantity);
            return redirect()->route('homepage');
        }

        // add item
        $cost = $products[$key]['cost'];
        $total = $cost * $quantity;
        $item = array(
            'name' => $products[$key]['name'],
            'img' => $products[$key]['img'],
            'cost' => $cost,
            'qty' => $quantity,
            'total' => $total
        );
        $cart[$key] = $item;
        Session::put('cart', $cart);
    }

    public function listcart()
    {
        return view('user.cart.list', ['subtotal' => $this->getsubtotalcart()]);
    }

    // Update an item in the cart
    public function updateitemcart($key, $quantity)
    {
        $quantity = (int)$quantity;
        $cart = Session::get('cart');
        if (isset($cart[$key])) {
            if ($quantity <= 0) {
                unset($cart[$key]);
                Session::put('cart', $cart);
            } else {
                $cart[$key]['qty'] = $quantity;
                $total = $cart[$key]['cost'] * $cart[$key]['qty'];
                $cart[$key]['total'] = $total;
                Session::put('cart', $cart);
            }
        }
    }

    // get cart subtotal
    public function getsubtotalcart()
    {
        $subtotal = 0;
        $cart = Session::get('cart');
        if ($cart !== null) {
            foreach ($cart as $item) {
                $subtotal += $item['total'];
            }
        }
        $subtotal_f = number_format($subtotal, 2);
        return $subtotal_f;
    }

}
