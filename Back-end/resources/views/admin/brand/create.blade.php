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
                Brands
            </span>
            <span class="subtitle">
                Add Brand
            </span>
        </div>
        <div class="row row-brands">
            <div class="col-sm-10">
                <form action="{{ route('brand.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="brandName">Brand Name</label>
                        <input type="text" name="brandName" id="brandName" class="form-control">
                    </div>
                    {{-- Hien thi thong bao loi --}}
                    @if ($errors->has('brandName'))
                        <p>{{ $errors->first('brandName') }}</p>
                    @endif
                    <div class="form-group">
                        <input type="submit" value="Create Brand">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
