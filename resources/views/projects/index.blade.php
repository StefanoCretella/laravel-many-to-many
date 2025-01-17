@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Projects</h1>
        <a href="{{ route('projects.create') }}" class="btn btn-primary mb-4">Create New Project</a>
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
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td>
                            <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary btn-sm">View</a>
                            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
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
