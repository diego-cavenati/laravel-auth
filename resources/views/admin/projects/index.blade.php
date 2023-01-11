@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="heading d-flex justify-content-between">
        <h2>Projects</h2>
        <div>
            <a href="{{route('admin.projects.create')}}" class="btn btn-primary">Add Item</a>
        </div>
    </div>
    <div class="row">
        <div class="col col-table">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>title</th>
                        <th>slug</th>
                        <th>description</th>
                        <th>vote</th>
                        <th>link</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->vote }}</td>
                        <td>{{ $project->link }}</td>
                        <td>
                            <a>edit</a>
                            <a href="{{route('admin.projects.show', $project->slug)}}">view</a>
                            <a>delete</a>
                        </td>
                    </tr>
                    @empty
                    <p>There are no projects</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection