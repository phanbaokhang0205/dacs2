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
                List Users
            </span>
        </div>
        <div class="row row-brands">
            <div class="col-sm-10">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->password }}</td>
                                <td>{{ $user->typeuser }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn-edit">Edit</a>
                                    <form action="{{ route('user.destroy', $user->id) }}" class="delete"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="btn-delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center text-center">{{ $users->links() }}</div>
            </div>
        </div>
    </div>
@endsection
