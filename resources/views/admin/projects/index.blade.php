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
                        <th>title</th>
                        <th>description</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($projects as $project)
                    <tr>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>
                            <a>edit</a>
                            <a href="{{route('projects.show', $project->id)}}">view</a>
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