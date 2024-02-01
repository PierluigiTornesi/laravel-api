@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2><strong>Name : </strong> {{ $type->name}}</h2>

        <p><strong>Slug : </strong> {{ $type->slug}}</p>

        <hr>

        @if (count($type->projects) > 0)
            <h3>All projects of this type</h3>
            <ul>
                @foreach ($type->projects as $project)
                    <li>
                        <a href="{{ route('admin.projects.show', ['project' => $project->slug])}}">{{ $project->title}}</a>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No such project exists </p>
        @endif
    </div>
@endsection