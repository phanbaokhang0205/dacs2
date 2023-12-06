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
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($result as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->typeuser }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('user.edit', $row->id) }}" class="btn-edit">Edit</a>
                                    <form action="{{ route('user.destroy', $row->id) }}" class="delete"
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
            </div>
        </div>
    </div>
@endsection
