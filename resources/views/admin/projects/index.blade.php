@extends('layouts.app')

@section('css')
    {{-- FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')

    <div class="container">
        
        <a class="btn btn-primary mb-4 text-end" href="{{ route('admin.projects.create')}}">Aggiungi un progetto</a>
        
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Link</th>
                <th scope="col">Slug</th>
                <th scope="col">Created up</th>
                <th scope="col">Updated up</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                    <tr>
                    <th scope="row">{{$project->id}}</th>
                    <td>{{$project->name}}</td>
                    <td>{{$project->description}}</td>
                    <td>{{$project->link}}</td>
                    <td>{{$project->slug}}</td>
                    <td>{{$project->created_at}}</td>
                    <td>{{$project->updated_at}}</td>
                    <td>
                        <a href="{{ route('admin.projects.show', $project)}}">
                            <i class="fa-solid fa-circle-info fa-xl"></i>
                        </a>
                    </td>
                  </tr>
                @empty
                    <tr>
                        <td colspan="7"> <i>Non ci sono progetti</i></td>
                    </tr>
                @endforelse
              
              
            </tbody>
          </table>
        {{ $projects->links('pagination::bootstrap-5' )}}
    </div>
    
@endsection
