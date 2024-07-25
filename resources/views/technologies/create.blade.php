@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Create Technology</h1>
        <form action="{{ route('technologies.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection
