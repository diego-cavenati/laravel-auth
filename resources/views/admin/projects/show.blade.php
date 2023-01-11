@extends('layouts.admin')

@section('content')
<h1>{{$project->title}}</h1>
<h5>{{$project->slug}}</h5>
<p>{{$project->description}}</p>
<div>{{$project->vote}}</div>
<div>{{$project->link}}</div>
@endsection