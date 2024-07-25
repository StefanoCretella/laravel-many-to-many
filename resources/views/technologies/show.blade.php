@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">{{ $technology->name }}</h1>
        <a href="{{ route('technologies.index') }}" class="btn btn-primary">Back to Technologies</a>
    </div>
@endsection
