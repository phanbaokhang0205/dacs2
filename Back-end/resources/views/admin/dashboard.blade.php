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
        <span class="title">
            Dash Board
        </span>
    </div>
    <div class="row-content">
        <div class="row-1">
            <div class="total-users">
                <div class="icon">
                    <i class='bx bx-user'></i>
                </div>
                <div class="content">
                    <p class="amount">
                        2
                    </p>
                    <p class="title">
                        Users
                    </p>
                </div>
            </div>
            <div class="total-products">
                <div class="icon">
                    <i class='bx bx-car' ></i>
                </div>
                <div class="content">
                    <p class="amount">
                        13
                    </p>
                    <p class="title">
                        Products
                    </p>
                </div>
            </div>
        </div>
        <div class="row-2">
            <div class="total-brands">
                <div class="icon">
                    <i class='bx bx-card'></i>
                </div>
                <div class="content">
                    <p class="amount">
                        222
                    </p>
                    <p class="title">
                        Brands
                    </p>
                </div>
            </div>
            <div class="total-orders">
                <div class="icon">
                    <i class='bx bx-calendar-check'></i>
                </div>
                <div class="content">
                    <p class="amount">
                        21
                    </p>
                    <p class="title">
                        Orders
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row-content">
        
    </div>


</div>
@endsection
