@extends('layouts.admin.main')

@section('content')
    <div class="main-content">
        <div class="row-title">
            <span class="title">
                Products
            </span>
            <span class="subtitle">
                Add Product
            </span>
        </div>
        <div class="row row-brands">
            <div class="col-sm-10">
                <form action="{{ route('product.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="brandID">Brand:</label>
                        <select name="brandID" id="brandID" class="form-control">
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->brandID }}">
                                    {{ $brand->brandName }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="productCode">Code:</label>
                        <input type="text" name="productCode" id="productCode" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="productName">Name:</label>
                        <input type="text" name="productName" id="productName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="listPrice">List Price:</label>
                        <input type="text" name="listPrice" id="listPrice" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Create Product">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
