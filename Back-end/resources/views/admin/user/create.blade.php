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
    <div class="main-content user_CRUD">
        <div class="row-title">
            <h2 class="title">
                Users
            </h2>
            <h6 class="subtitle">
                Add user
            </h6>
        </div>
        <div class="row row-user">
            <div class="col-sm-10 m-auto">
                <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-sm-6 ">
                            <label for="userName">Username:</label>
                            <input type="text" name="name" id="userName" class="form-control">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="email">Email:</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="password">Password:</label>
                            <input type="text" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group col-sm-6">
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
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Create User">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
