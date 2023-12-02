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
                List Brands
            </span>
        </div>
        <div class="row row-brands">
            <div class="col-sm-10">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Brand Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brands as $brand)
                            <tr>
                                <td>{{ $brand->brandID }}</td>
                                <td>{{ $brand->brandName }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('brand.show', $brand->brandID) }}" class="btn-show">Show</a>
                                    <a href="{{ route('brand.edit', $brand->brandID) }}" class="btn-edit">Edit</a>
                                    <form action="{{ route('brand.destroy', $brand->brandID) }}" class="delete"
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
                <div class="d-flex justify-content-center text-center">{{ $brands->links() }}</div>
            </div>
        </div>
    </div>
@endsection
