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
                Add Product
            </h6>
        </div>

        <div class="row row-brands">

            <div class="col-sm-10 m-auto">
                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- Hien thi noi dung loi --}}
                    <div class="card-body">
                        @include('admin.product.error')
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="brandID">Brand:</label>
                            <select name="brandID" id="brandID" class="form-control">
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->brandID }}">
                                        {{ $brand->brandName }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="productCode">Code:</label>
                            <input type="text" name="productCode" id="productCode" class="form-control">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="productName">Name:</label>
                            <input type="text" name="productName" id="productName" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="gearBox">Gear Box:</label>
                            <select name="gearBox" id="gearBox" class="form-control">
                                <option value="motorcycle">
                                    Motorcycle
                                </option>
                                <option value="scooter">
                                    Scooter
                                </option>
                                <option value="manual">
                                    Manual
                                </option>
                                <option value="electric">
                                    Electric
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="productImage">Select Image:</label><br>
                            <input type="file" name="productImage" id="productImage" class="form-control-file">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="listPrice">List Price:</label>
                            <input type="text" name="listPrice" id="listPrice" class="form-control">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="discountPercent">Discount Percent:</label>
                            <input type="text" name="discountPercent" id="discountPercent" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Create Product">
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
