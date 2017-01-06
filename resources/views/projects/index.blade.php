@extends('app')

@section('content')
<h2>Projects</h2>

@if ( !$projects->count() )
    You have no projects
@else
<ul>
    @foreach( $projects as $project )
    <li>
        {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->id))) !!}

        <a href="{{ route('projects.show', $project->id) }}">{{ $project->name }}</a>
        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-info">Edit</a>
        {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}


        {!! Form::close() !!}
    </li>
    @endforeach
</ul>
@endif

<p>
    {!! link_to_route('projects.create', 'Create Project') !!}
</p>
@endsection