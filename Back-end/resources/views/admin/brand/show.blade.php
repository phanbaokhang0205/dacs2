@extends('layouts.admin.main')

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
                                <td class="d-flex">
                                    <a href="{{ route('brand.edit', $brand->brandID) }}" class="btn-edit">Edit</a>
                                    <form action="{{ route('brand.destroy', $brand->brandID) }}" class="delete d-inline-block"
                                        method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete">
                                        <input type="submit" value="Delete" class="btn-delete">
                                    </form>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
