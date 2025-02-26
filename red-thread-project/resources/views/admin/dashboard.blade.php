@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Admin Dashboard - Manage Display Boards</h2>

    <a href="" class="btn btn-success mb-4">Add New DisplayBoard</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Image</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($displayBoards as $board)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $board->title }}</td>
                <td>
                    <img src="{{ asset('storage/' . $board->image) }}" width="80" height="60" alt="Image">
                </td>
                <td>{{ Str::limit($board->description, 50) }}</td>
                <td>
                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                    <form action="#" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
