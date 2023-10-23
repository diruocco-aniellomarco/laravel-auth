@extends('layouts.app')



@section('content')

    <div class="container">
        
        <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-info my-3">Torna alla lista</a>

        <h1>{{ $project->name }}</h1>
        <div class="row g-3 mt-3">
            <div class="col-3">
                <strong>Slug</strong>
                <p>{{ $project->slug }}</p>
            </div>
            <div class="col-3">
                <strong>Link</strong>
                <p>{{ $project->link }}</p>
            </div>
            <div class="col-3">
                <strong>Created at</strong>
                <p>{{ $project->created_at }}</p>
            </div>
            <div class="col-3">
                <strong>Updated at</strong>
                <p>{{ $project->updated_at }}</p>
            </div>

            <div class="col-12">
                <strong>Description</strong>
                <p>{{ $project->description }}</p>
            </div>  
        </div>
        
    </div>
    
@endsection