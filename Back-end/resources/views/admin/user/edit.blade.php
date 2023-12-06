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
                        <input type="text" name="userName" id="userName" class="form-control" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" class="form-control" value="{{ $user->email }}">
                    </div>
                    {{-- <div class="form-group">
                        <label for="productImage">Select Image:</label>
                        <input type="file" name="productImage" id="productImage" class="form-control-file">
                    </div> --}}
                    {{-- <div class="form-group">
                        <label for="password">Password:</label>
                        <input  type="password" name="password" id="password" class="form-control" style="background: rgb(197, 197, 197)" value="{{ $user->password }}" readonly>
                    </div> --}}
                    <div class="form-group">
                        <label for="role">Role:</label>
                        <select name="userID" id="userID" class="form-control">
                                <option>{{ 'admin' }}</option>
                                <option>{{ 'user' }}</option>
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
