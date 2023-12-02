@extends('layouts.admin.main')

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
                    <div class="form-group">
                        <input type="submit" value="Create Brand">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
