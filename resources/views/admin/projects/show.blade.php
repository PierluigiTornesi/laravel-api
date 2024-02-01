@extends('layouts.admin')

@section('content')
    <div class="container mt-5">

        @include('partials.previous_button')

        
        <h2><strong>Title Project : </strong>{{ $project->title}}</h2>

        <p><strong>Type : </strong> {{ $project->type? $project->type->name : 'No type available'}}</p>

        <div>
            @if (count($project->technologies) > 0)
                <strong>Technologies used: </strong>
                @foreach ($project->technologies as $technology)
                    <span>{{ $technology->name}}</span>
                @endforeach
            @else
                <p>The technologies used were not indicated</p>
            @endif
        </div>

        <div class="mt-4 w-50">
            <p>
                <strong>Description : </strong>{{ $project->description ?? 'Not available ' }}
            </p>
        </div>

        <div class="mt-4 w-50">
            <p>
                <strong>Slug : </strong>{{ $project->slug}}
            </p>
        </div>

        <div>
            <a class="btn btn-warning" href="{{ route('admin.projects.edit', ['project' => $project->slug])}}">Edit</a>

            <form class="d-inline-block" action="{{ route('admin.projects.destroy' , [ 'project' => $project->slug])}}" method="POST">
                @csrf
                @method('DELETE')
                
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    </div>

@endsection