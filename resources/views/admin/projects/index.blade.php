@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="fs-4 text-secondary my-4">
            Lista Progetti
        </h2>
        <a href="{{ route('admin.projects.create')}}" class="btn btn-primary">Crea Progetto</a>
    </div>
    @if(session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Slug</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <th scope="row">{{$project->id}}</th>
                <td>{{$project->title}}</td>
                <td>{{$project->slug}}</td>
                <td>
                    <ul class="list-unstyled d-flex m-0 gap-1 justify-content-end">
                        <li><a href="{{ route('admin.projects.show', $project->slug)}}" class="btn btn-sm btn-primary">Show</a></li>
                        <li><a href="{{ route('admin.projects.edit', $project->slug)}}" class="btn btn-sm btn-warning">Edit</a></li>
                        <li>
                            <form action="{{ route('admin.projects.destroy', $project)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </li>
                    </ul>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
