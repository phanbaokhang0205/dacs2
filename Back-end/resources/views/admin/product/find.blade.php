@extends('layouts.admin.main')
@section('search')
    <div class="search">
        <form action="{{ route('product.find') }}" method="post">
            @csrf
            @method('POST') {{-- ghi đè phương thức POST --}}
            <button class="search" type="submit">
                <i class='bx bx-search'></i>
            </button>
            <input type="text" id="inputSearch" name="search" class="" placeholder="Search products...">
        </form>
    </div>
@endsection
@section('content')
    <div class="main-content main-content-product">
        <div class="row-title">
            <span class="title">
                List product
            </span>
        </div>
        <div class="row row-product">
            <div class="col-sm-12">
                <table class="table table-hover">
                    <thead>
                        <th>Product Image</th>
                        <th>Brand Name</th>
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>List Price</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($result as $row)
                            <tr>
                                <td><img src="{{ asset('img/' . $row->productImage) }}" style="max-height: 100px"></td>
                                <td>{{ $row->brandName }}</td>
                                <td>{{ $row->productCode }}</td>
                                <td>{{ $row->productName }}</td>
                                <td>{{ $row->listPrice }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('product.edit', $row->productID) }}" class="btn-edit"><i
                                                class='bx bxs-edit bx-sm'></i></a>
                                        <form action="{{ route('product.destroy', $row->productID) }}" class="delete"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" value="Delete" class="btn-delete"><i
                                                    class='bx bxs-tag-x bx-sm'></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- <div class="d-flex justify-content-center text-center">{{ $result->links() }}</div> --}}
            </div>
        </div>
    </div>
@endsection
