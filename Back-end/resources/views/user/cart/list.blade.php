@extends('layouts.user.main')
@section('content')
    <main class="cart_page">
        <div class="container-fluid top-title">
            <img src="{{ asset('img/slide8.jpg') }}" alt="" class="img-fluid">
            <div class="content-header">
                <div class="title">
                    <i class='bx bx-cart mb-5'></i>
                    <h1 class="pb-4">Cart</h1>
                    <a href="{{ route('homepage') }}">Homepage/ </a>
                    <a class="" href="{{ route('products') }}">Products/ </a>
                    <a class="gt" href="{{ route('listcart') }}">Cart</a>
                </div>
            </div>
        </div>
        @if (empty(session('cart')) || count(session('cart')) == 0)
            <p>There are no items in your cart.</p>
        @else
            @php
                $cart = Session::get('cart');
            @endphp
            <form action="{{ route('updatecart') }}" method="get" class="d-inline">
                @csrf
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th>Item</th>
                            <th>Item Cost</th>
                            <th>Quantity</th>
                            <th>Item Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($cart))
                            @foreach ($cart as $key => $item)
                                @php
                                    $cost = number_format($item['cost'], 2);
                                    $total = number_format($item['total'], 2);
                                @endphp
                                <tr class="align-middle text-center">
                                    <td>{{ $item['name'] }}</td>
                                    <td>
                                        {{ $cost }}
                                    </td>
                                    <td>
                                        <input class="input_qty" type="text" name="newqty[{{ $key }}]"
                                            value="{{ $item['qty'] }}">
                                    </td>
                                    <td>
                                        {{ $total }}
                                    </td>
                                    <td>
                                        {{-- <form action="{{ route('cart.delete', $key) }}" class="delete" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" value="Delete" class="btn-delete"><i class='bx bxs-tag-x bx-sm'></i></button>
                                        </form> --}}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                <div class="update_cart">

                    <b>Subtotal:</b>
                    <span>$ {{ $subtotal }}</span>
                </div>
                <div class="btn-update">
                    <input type="submit" value="Update Cart">
                </div>
            </form>
        @endif
    </main>

@endsection
