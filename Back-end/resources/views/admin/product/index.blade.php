@extends('layouts.admin.main')
@section('search')
    <div class="search">
        <form action="{{ route('product.find') }}" method="post">
            @csrf
            <button class="search" type="submit">
                <i class='bx bx-search'></i>
            </button>
            <input type="text" id="inputSearch" name="search" class="" placeholder="Search products...">
        </form>
    </div>
@endsection
@section('content')
    <div class="main-content main-content-product">
        <div class="row-title">
            <h2 class="title">
                Products
            </h2>
        </div>
        <div class="row row-product">
            <div class="col-sm-12">
                <table class="table table-hover table-product">
                    <thead>
                        <tr class="text-center">
                            <th>Image</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Gear Box</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr class="create_form_product align-middle text-center">
                                <td><img src="{{ asset('img/' . $product->productImage) }}" alt="Product Image"></td>
                                <td>{{ $product->productCode }}</td>
                                <td>{{ $product->productName }}</td>
                                <td>
                                    @foreach ($brands as $brand)
                                        @if ($brand->brandID === $product->brandID)
                                            {{ $brand->brandName }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    {{ $product->gearBox }}
                                </td>
                                <td>${{ $product->listPrice }}</td>
                                <td>
                                    <div class="edit_del d-flex gap-2">
                                        <a href="{{ route('product.edit', $product->productID) }}" class="btn-edit"><i
                                                class='bx bxs-edit bx-sm'></i></a>
                                        <form action="{{ route('product.destroy', $product->productID) }}" class="delete"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" value="Delete" class="btn-delete"><i
                                                    class='bx bxs-tag-x bx-sm'></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center text-center">{{ $products->links() }}</div>
            </div>
        </div>
    </div>
@endsection
