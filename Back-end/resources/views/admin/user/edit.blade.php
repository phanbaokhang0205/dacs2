@extends('layouts.admin.main')
@section('search')
    <div class="search">
        <form action="{{ route('user.find') }}" method="post">
            @csrf
            <button class="search" type="submit">
                <i class='bx bx-search'></i>
            </button>
            <input type="text" id="inputSearch" name="search" class="" placeholder="Search users...">
        </form>
    </div>
@endsection
@section('content')
    <div class="main-content">
        <div class="row-title">
            <span class="title">
                Edit Product
            </span>
        </div>
        <div class="row row-users">
            <div class="col-sm-10">
                <form action="{{ route('user.update', $user->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="userName">Username:</label>
                        <input type="text" name="name" id="userName" class="form-control" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" class="form-control" value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Password:</label>
                        <input type="text" name="password" id="password" class="form-control" value="{{ $user->password }}">
                    </div>
                    <div class="form-group">
                        <label for="typeuser">Role:</label>
                        <select name="typeuser" id="typeuser" class="form-control">
                                <option value="admin" {{ $user->typeuser == "admin" ? 'selected' : '' }}>
                                    Admin
                                </option>
                                <option value="user" {{ $user->typeuser == "user" ? 'selected' : '' }}>
                                    User
                                </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Edit User">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
