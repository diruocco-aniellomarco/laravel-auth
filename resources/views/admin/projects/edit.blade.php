@extends('layouts.app')



@section('content')

    <div class="container">
        
        <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-info my-3">Torna alla lista</a>

        <form class="row g-3 mt-4" action="{{ route('admin.projects.update', $project )}}" method="POST">
            {{-- token da inserire per farlo leggere a laravel (questioni di sicurezza) --}}
            @csrf
            @method('PUT')
            <div class="col-4">
                <label class="d-block" for="name">Nome</label>
                <input type="text" id="name" name="name" class="form-control" value="{{old('name', $project->name)}}">
            </div>
            
            <div class="col-4">
                <label class="d-block" for="link">Link</label>
                <input type="text" id="link" name="link" class="form-control" value="{{old('link', $project->link)}}">
            </div>

            {{-- slug, come lo facciO? --}}
            <div class="col-4">
                <label class="d-block" for="slug">Slug</label>
                <input type="text" id="slug" name="slug" class="form-control" value="{{old('slug', $project->slug)}}">
            </div>
    
            <div class="col-12">
                <label class="d-block" for="description">Descrizione</label>
                <input type="text" id="description" name="description" class="form-control" value="{{old('description', $project->description)}}">
            </div>
            <div class="col-6">
                <button class="btn btn-success">SALVA</button>
                <a href="{{ route('admin.projects.index')}}" class="btn btn-warning">ANNULLA</a>
            
            </div>
        </form>
        
        
    </div>
    
@endsection