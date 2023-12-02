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
    <div class="main-content">
        <div class="row-title">
            <span class="title">
                List Products
            </span>
        </div>
        <div class="row row-brands">
            <div class="col-sm-10">
                <table class="table table-hover table-border">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->productCode }}</td>
                                <td>{{ $product->productName }}</td>
                                <td>{{ $product->brandID }}</td>
                                <td>{{ $product->listPrice }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('product.edit', $product->productID) }}" class="btn-edit">Edit</a>
                                    <form action="{{ route('product.destroy', $product->productID) }}" class="delete"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="btn-delete">
                                    </form>
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
