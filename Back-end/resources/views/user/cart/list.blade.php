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
            <form action="{{ route('updatecart') }}" method="post" class="d-inline">
                @csrf
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th>Product image</th>
                            <th>Product name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $total = 0 @endphp
                        @if (!empty($cart))
                            @foreach ($cart as $key => $item)
                                @php
                                    $cost = number_format($item['cost'], 2);
                                    $total = number_format($item['total'], 2);
                                @endphp
                                <tr rowId="{{ $key }}" class="align-middle text-center">
                                    <td><img src="{{ asset('img/' . $item['img']) }}" width="100"></td>
                                    <td>{{ $item['name'] }}</td>
                                    <td>
                                        $ {{ $cost }}
                                    </td>
                                    <td>
                                        <input class="input_qty" type="text" name="newqty[{{ $key }}]"
                                            value="{{ $item['qty'] }}">
                                    </td>
                                    <td>
                                        $ {{ $total }}
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-danger btn-md delete-product">
                                            <i class='bx bx-x'></i>
                                        </a>
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
@section('js')
    <script type="text/javascript">
        $(".edit-cart-info").change(function(e) {
            e.preventDefault();
            var ele = $(this);
            $.ajax({
                url: '{{ route('updatecart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("rowId"),
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });

        $(".delete-product").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Do you really want to delete?")) {
                $.ajax({
                    url: '{{ route('delete.cart.product') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("rowId")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
@endsection
