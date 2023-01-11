@extends('layouts.admin')

@section('content')
<div class="container mb-5">
    <h1 class="py-5">Create a new Items</h1>
    <form action="{{route('admin.projects.store')}}" method="post" class="card p-3">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Batman" aria-describedby="titleHelper">
            <small id="titleHelper" class="text-muted">Add the item title here, you have to fill it</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="4"></textarea>
        </div>

        <div class="mb-3">
            <label for="vote" class="form-label">Vote</label>
            <input type="text" name="vote" id="vote" class="form-control" placeholder="Batman" aria-describedby="voteHelper">
            <small id="voteHelper" class="text-muted">Add the vote here, max 10 characters</small>
        </div>

        <div class="mb-3">
            <label for="link" class="form-label">Link</label>
            <input type="text" name="link" id="link" class="form-control" placeholder="Batman" aria-describedby="linkHelper">
            <small id="linkHelper" class="text-muted">Add the link here, max 50 characters</small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
@endsection