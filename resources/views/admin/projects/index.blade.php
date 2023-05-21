@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        Lista Progetti
    </h2>
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
                    <ul>
                        <li><a href="" class="btn btn-sm btn-primary">Show</a></li>
                        <li><a href="" class="btn btn-sm btn-primary">Edit</a></li>
                        <li><a href="" class="btn btn-sm btn-primary">Show</a></li>
                    </ul>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
