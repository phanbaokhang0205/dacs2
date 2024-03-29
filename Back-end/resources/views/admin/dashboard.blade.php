@extends('layouts.admin.main')

@section('search')
    <div class="search">
        <form action="">
            @csrf
            <button class="search" type="submit">
                <i class='bx bx-search'></i>
            </button>
            <input type="text" id="inputSearch" class="" placeholder="Search dashboard...">
        </form>
    </div>
@endsection
@section('content')
    <div class="main-content">
        <div class="row-title">
            <span class="title">
                Dash Board
            </span>
        </div>
        <div class="row-content">
            {{-- <div class="row-1">
                <div class="total-income bg-info">
                    <div class="title">
                        Total Income
                    </div>
                    <div class="amount">
                        $ 579,000
                    </div>
                </div>
                <div class="total-profit bg-warning">
                    <div class="title">
                        Total Profit
                    </div>
                    <div class="amount">
                        $ 579,000
                    </div>
                </div>
            </div>
            <div class="row-2">
                <div class="oders bg-success">
                    <div class="title">
                        Orders
                    </div>
                    <div class="amount">
                        $ 579,000
                    </div>
                </div>
                <div class="products bg-danger">
                    <div class="title">
                        Products
                    </div>
                    <div class="amount">
                        $ 579,000
                    </div>
                </div>
            </div> --}}
            <div class="title row">
                <div class="col-sm-8">
                    <h5>Statistic of products</h5>
                    <table class="table table-bordered table-sm">
                        <thead class="thead-light">
                            <th>Brand Name</th>
                            <th>Quantity</th>
                        </thead>
                        <tbody>
                            @foreach ($quantity as $row)
                                <tr>
                                    <td>{{ $row->brandName }}</td>
                                    <td>{{ $row->quantity }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- <div class="title row">
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
                            @if (!empty($result))
                                @foreach ($result as $row)
                                    <tr>
                                        <td>{{ $row->brandName }}</td>
                                        <td>{{ $row->productCde }}</td>
                                        <td>{{ $row->productName }}</td>
                                        <td>{{ $row->listPrice }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <div></div>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div> --}}
        </div>




    </div>
@endsection
