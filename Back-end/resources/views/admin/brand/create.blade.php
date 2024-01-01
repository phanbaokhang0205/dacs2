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
    <div class="main-content brand_CRUD">
        <div class="row-title">
            <h2 class="title">
                Brands
            </h2>
            <h6 class="subtitle">
                Add Brand
            </h6>
        </div>
        <div class="row row-brands">
            <div class="col-sm-10">
                <form action="{{ route('brand.store') }}" method="post">
                    @csrf
                    {{-- Hien thi thong bao loi --}}
                    @if ($errors->has('brandName'))
                        <div class="alert alert-danger">{{ $errors->first('brandName') }}</div>
                    @endif
                    
                    <div class="form-group">
                        <label for="brandName">Brand Name</label>
                        <input type="text" name="brandName" id="brandName" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Create Brand">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
