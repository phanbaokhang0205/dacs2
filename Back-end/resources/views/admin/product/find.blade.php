@extends('layouts.admin.main')
@section('search')
    <div class="search">
        <form action="{{ route('product.find') }}" method="post">
            @csrf
            <button class="search" type="submit" >
                <i class='bx bx-search'></i>
            </button>
            <input type="text" id="inputSearch" name="search" class="" placeholder="Search products...">
        </form>
    </div>
@endsection
@section('content')
    <div class="main-content">
        <div class="row-title">
            <span class="title">
                List product
            </span>
        </div>
        <div class="row row-brands">
            <div class="col-sm-10">
                <h5>List of products</h5>
                <table class="table table-bordered table-sm">
                    <thead>
                        <th>Brand Name</th>
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>List Price</th>
                    </thead>
                    <tbody>
                        @foreach ($result as $row)
                            <tr>
                                <td>{{ $row->brandName }}</td>
                                <td>{{ $row->productCode }}</td>
                                <td>{{ $row->productName }}</td>
                                <td>{{ $row->listPrice }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
