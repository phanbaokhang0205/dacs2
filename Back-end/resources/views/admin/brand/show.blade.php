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
                Brand details
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
                        <tr>
                            <td>{{ $brand->brandID }}</td>
                            <td>{{ $brand->brandName }}</td>
                            <td>
                                <div class="edit_del d-flex justify-content-center gap-2">
                                    <a href="{{ route('brand.edit', $brand->brandID) }}" class="btn-edit"><i
                                            class='bx bxs-edit bx-sm'></i></a>
                                    <form action="{{ route('brand.destroy', $brand->brandID) }}" class="delete"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" value="Delete" class="btn-delete"><i
                                                class='bx bxs-tag-x bx-sm'></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
