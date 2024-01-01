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
        <div class="row-title row">
            <h2 class="title">
                Dash Board
            </h2>

        </div>
        <div class="row-content">
            <div class="row-1">
                <div class="total-users">
                    <div class="icon">
                        <i class='bx bx-user'></i>
                    </div>
                    <p class="amount">
                        {{ $userCount }}
                    </p>
                    <p class="title">
                        Users
                    </p>
                </div>
                <div class="total-products">
                    <div class="icon">
                        <i class='bx bx-car'></i>
                    </div>
                    <p class="amount">
                        {{ $productCount }}
                    </p>
                    <p class="title">
                        Products
                    </p>
                </div>
                <div class="total-brands">
                    <div class="icon">
                        <i class='bx bx-card'></i>
                    </div>
                    <p class="amount">
                        {{ $brandCount }}
                    </p>
                    <p class="title">
                        Brands
                    </p>
                </div>
            </div>

        </div>
        <div class="row-title row">
            <h2 class="title">
                Quantity of Brands
            </h2>
        </div>
        <div class="row-content ">
            <div class="row-2 row">
                @foreach ($quantity as $row)
                    @if ($row->brandName === 'Honda')
                        <div class="col-md-4 col-sm-6">
                            <div class="quantity-card">
                                <div class="logo">
                                    <img src="{{ asset('img/honda.png') }}">
                                </div>
                                <h1><b>{{ $row->brandName }}</b></h1>
                                <h5>{{ $row->quantity }} products</h5>
                            </div>
                        </div>
                    @endif
                    @if ($row->brandName === 'Yamaha')
                        <div class="col-md-4 col-sm-6">
                            <div class="quantity-card">
                                <div class="logo">
                                    <img src="{{ asset('img/yamaha.png') }}">
                                </div>
                                <h1><b>{{ $row->brandName }}</b></h1>
                                <h5>{{ $row->quantity }} products</h5>
                            </div>
                        </div>
                    @endif
                    @if ($row->brandName === 'VinFast')
                        <div class="col-md-4 col-sm-6">
                            <div class="quantity-card">
                                <div class="logo">
                                    <img src="{{ asset('img/vinfast.png') }}">
                                </div>
                                <h1><b>{{ $row->brandName }}</b></h1>
                                <h5>{{ $row->quantity }} products</h5>
                            </div>
                        </div>
                    @endif
                    @if ($row->brandName === 'Suzuki')
                        <div class="col-md-4 col-sm-6">
                            <div class="quantity-card">
                                <div class="logo">
                                    <img src="{{ asset('img/suzuki.png') }}">
                                </div>
                                <h1><b>{{ $row->brandName }}</b></h1>
                                <h5>{{ $row->quantity }} products</h5>
                            </div>
                        </div>
                    @endif
                    @if ($row->brandName === 'kawasaki')
                        <div class="col-md-4 col-sm-6">
                            <div class="quantity-card">
                                <div class="logo">
                                    <img src="{{ asset('img/kawasaki.png') }}">
                                </div>
                                <h1><b>{{ $row->brandName }}</b></h1>
                                <h5>{{ $row->quantity }} products</h5>
                            </div>
                        </div>
                    @endif
                    @if ($row->brandName === 'Triumph')
                        <div class="col-md-4 col-sm-6">
                            <div class="quantity-card">
                                <div class="logo">
                                    <img src="{{ asset('img/triumph.jpg') }}">
                                </div>
                                <h1><b>{{ $row->brandName }}</b></h1>
                                <h5>{{ $row->quantity }} products</h5>
                            </div>
                        </div>
                    @endif
                    @if ($row->brandName === 'Yadea')
                        <div class="col-md-4 col-sm-6">
                            <div class="quantity-card">
                                <div class="logo">
                                    <img src="{{ asset('img/Yadea.png') }}">
                                </div>
                                <h1><b>{{ $row->brandName }}</b></h1>
                                <h5>{{ $row->quantity }} products</h5>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>


    </div>
@endsection
