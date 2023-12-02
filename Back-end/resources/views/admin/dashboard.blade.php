@extends('layouts.admin.main')

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
        </div>




    </div>
@endsection
