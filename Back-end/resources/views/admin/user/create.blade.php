@extends('layouts.admin.main')

@section('search')
    <div class="search">
        <form action="{{ route('user.find') }}" method="post">
            @csrf
            <button class="search" type="submit">
                <i class='bx bx-search'></i>
            </button>
            <input type="text" id="inputSearch" name="search" class="" placeholder="Search user...">
        </form>
    </div>
@endsection
@section('content')
    <div class="main-content">
        <div class="row-title">
            <span class="title">
                Users
            </span>
            <span class="subtitle">
                Add user
            </span>
        </div>
        <div class="row row-users">
            <div class="col-sm-10">
                <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="userName">Username:</label>
                        <input type="text" name="name" id="userName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="text" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="typeuser">Role:</label>
                        <select name="typeuser" id="typeuser" class="form-control">
                            <option value="admin">
                                Admin
                            </option>
                            <option value="user">
                                User
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Create User">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
