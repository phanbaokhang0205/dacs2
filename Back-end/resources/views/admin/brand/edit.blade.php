@extends('layouts.admin.main')
@section('search')
    <div class="search">
        <form action="{{ route('brand.find') }}" method="post">
            @csrf
            <button class="search" type="submit">
                <i class='bx bx-search'></i>
            </button>
            <input type="text" id="inputSearch" name="search" class="" placeholder="Search brand...">
        </form>
    </div>
@endsection
@section('content')
    <div class="main-content">
        <div class="row-title">
            <span class="title">
                Edit Brand
            </span>
        </div>
        <div class="row row-brands">
            <div class="col-sm-10">
                <form action="{{ route('brand.update',$brand->brandID) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="brandname">Brand Name:</label>
                        <input type="text" name="brandName" id="brandname" class="form-control" value="{{ $brand->brandName }}">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
