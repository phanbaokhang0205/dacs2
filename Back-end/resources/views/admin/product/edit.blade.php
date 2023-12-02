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
                Edit Product
            </span>
        </div>
        <div class="row row-brands">
            <div class="col-sm-10">
                <form action="{{ route('product.update', $product->productID) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="brandID">Brand:</label>
                        <select name="brandID" id="brandID" class="form-control">
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->brandID }}"
                                    {{ $brand->brandID == $product->brandID ? 'selected' : '' }}>
                                    {{ $brand->brandName }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="productCode">Code:</label>
                        <input type="text" name="productCode" id="productCode" class="form-control" value="{{ $product->productCode }}">
                    </div>
                    <div class="form-group">
                        <label for="productName">Name:</label>
                        <input type="text" name="productName" id="productName" class="form-control" value="{{ $product->productName }}">
                    </div>
                    <div class="form-group">
                        <label for="listPrice">List Price:</label>
                        <input type="text" name="listPrice" id="listPrice" class="form-control" value="{{ $product->listPrice }}">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
