@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Create Project</h1>
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" id="start_date" name="start_date" class="form-control">
            </div>
            <div class="mb-3">
                <label for="end_date" class="form-label">End Date</label>
                <input type="date" id="end_date" name="end_date" class="form-control">
            </div>
            <div class="mb-3">
                <label for="technologies" class="form-label">Technologies</label>
                <select id="technologies" name="technologies[]" class="form-control" multiple>
                    @foreach($technologies as $technology)
                        <option value="{{ $technology->id }}">{{ $technology->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection