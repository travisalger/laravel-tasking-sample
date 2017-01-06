@extends('app')

@section('content')
<h2>
    <a href="{{ route('projects.show', $project->id) }}">{{ $project->name }}</a>
    {{ $task->name }}
</h2>

{{ $task->description }}
@endsection