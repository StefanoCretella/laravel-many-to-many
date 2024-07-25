@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">{{ $project->name }}</h1>
        <p><strong>Description:</strong> {{ $project->description }}</p>
        <p><strong>Start Date:</strong> {{ $project->start_date }}</p>
        <p><strong>End Date:</strong> {{ $project->end_date }}</p>

        @if($project->technologies->isNotEmpty())
            <h2 class="mt-4">Technologies Used:</h2>
            <ul class="list-group">
                @foreach($project->technologies as $technology)
                    <li class="list-group-item">{{ $technology->name }}</li>
                @endforeach
            </ul>
        @endif
        <a href="{{ route('projects.index') }}" class="btn btn-primary mt-4">Back to Projects</a>
    </div>
@endsection
