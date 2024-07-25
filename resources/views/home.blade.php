@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Dashboard</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Projects</h5>
                        <p class="card-text">Manage your projects here.</p>
                        <a href="{{ route('projects.index') }}" class="btn btn-primary">View Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Technologies</h5>
                        <p class="card-text">Manage your technologies here.</p>
                        <a href="{{ route('technologies.index') }}" class="btn btn-primary">View Technologies</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
