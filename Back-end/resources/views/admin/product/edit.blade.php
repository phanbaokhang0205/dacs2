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
    <div class="main-content product_CRUD">
        <div class="row-title">
            <h2 class="title">
                Products
            </h2>
            <h6 class="subtitle">
                Edit Product
            </h6>
        </div>
        <div class="row row-brands">
            <div class="col-sm-10 m-auto">
                <form action="{{ route('product.update', $product->productID) }}" method="post"
                    enctype="multipart/form-data">
                    <div class="card-body">
                        @include('admin.product.error')
                    </div>
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
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="productCode">Code:</label>
                            <input type="text" name="productCode" id="productCode" class="form-control"
                                value="{{ $product->productCode }}">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="productName">Name:</label>
                            <input type="text" name="productName" id="productName" class="form-control"
                                value="{{ $product->productName }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="gearBox">Gear Box:</label>
                            <select name="gearBox" id="gearBox" class="form-control">
                                <option value="motorcycle" {{ $product->gearBox == "motorcycle" ? 'selected' : '' }}>
                                    Motorcycle
                                </option>
                                <option value="scooter" {{ $product->gearBox == "scooter" ? 'selected' : '' }}>
                                    Scooter
                                </option>
                                <option value="manual" {{ $product->gearBox == "manual" ? 'selected' : '' }}>
                                    Manual
                                </option>
                                <option value="electric" {{ $product->gearBox == "electric" ? 'selected' : '' }}>
                                    Electric
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="productImage">Select Image:</label><br>
                            <input type="file" name="productImage" id="productImage" class="form-control-file"
                                value="{{ $product->productImage }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="listPrice">List Price:</label>
                            <input type="text" name="listPrice" id="listPrice" class="form-control"
                                value="{{ $product->listPrice }}">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="discountPercent">Discount Percent:</label>
                            <input type="text" name="discountPercent" id="discountPercent" class="form-control"
                                value="{{ $product->discountPercent }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" id="description" class="form-control" value="{{ $product->description }}"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js-custom')
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
