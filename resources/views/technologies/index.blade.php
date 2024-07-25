@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Technologies</h1>
        <a href="{{ route('technologies.create') }}" class="btn btn-primary mb-4">Create New Technology</a>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($technologies as $technology)
                    <tr>
                        <td>{{ $technology->id }}</td>
                        <td>{{ $technology->name }}</td>
                        <td>
                            <a href="{{ route('technologies.show', $technology->id) }}" class="btn btn-primary btn-sm">View</a>
                            <a href="{{ route('technologies.edit', $technology->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('technologies.destroy', $technology->id) }}" method="POST" style="display:inline;">
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
