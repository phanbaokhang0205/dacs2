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
    <div class="main-content main-content-user">
        <div class="row-title">
            <span class="title">
                List Users
            </span>
        </div>
        <div class="row row-user">
            <div class="col-sm-12">
                <table class="table table-hover table-user">
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
                                <td class="d-flex gap-2 align-items-center">
                                    <a href="{{ route('product.edit', $row->id) }}" class="btn-edit"><i class='bx bxs-edit bx-sm'></i></a>
                                    <form action="{{ route('product.destroy', $row->id) }}" class="delete"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" value="Delete" class="btn-delete"><i class='bx bxs-tag-x bx-sm' ></i></button>
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
