@extends('layouts.admin')

@section('content')
<div class="container mb-5">
    <h1 class="py-5">Edit Items</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{route('admin.projects.update', $project->slug)}}" method="post" class="card p-3">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Batman" aria-describedby="titleHelper" value="{{old('title', $project->title)}}">
            <small id="titleHelper" class="text-muted">Add the item title here, you have to fill it</small>
        </div>
        @error('title')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror

        <div class="mb-3">
            <label for="description" class="form-label @error('description') is-invalid @enderror">Description</label>
            <textarea class="form-control" name="description" id="description" rows="4">{{old('description', $project->description)}}</textarea>
        </div>
        @error('description')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror

        <div class="mb-3">
            <label for="vote" class="form-label">Vote</label>
            <input type="text" name="vote" id="vote" class="form-control @error('vote') is-invalid @enderror" placeholder="Batman" aria-describedby="voteHelper" value="{{old('vote', $project->vote)}}">
            <small id="voteHelper" class="text-muted">Add the vote here, max 10 characters</small>
        </div>
        @error('vote')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror

        <div class="mb-3">
            <label for="link" class="form-label">Link</label>
            <input type="text" name="link" id="link" class="form-control @error('link') is-invalid @enderror" placeholder="Batman" aria-describedby="linkHelper" value="{{old('link', $project->link)}}">
            <small id="linkHelper" class="text-muted">Add the link here, max 50 characters</small>
        </div>
        @error('link')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror

        <button type="submit" class="btn btn-primary">Update</button>

    </form>
</div>
@endsection