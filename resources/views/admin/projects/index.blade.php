@extends('layouts.app')

@section('content')

    <div class="container">
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
