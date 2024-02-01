@extends('layouts.admin')

@section('content')
    <div class="container mt-5">

        @include('partials.previous_button')

        <h2>Edit the project</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </div>
        @endif
        <form action="{{ route('admin.projects.update' , ['project' => $project->slug])}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control " id="title" name="title" value="{{ old('title', $project->title) }}">
            </div>

            <div class="mb-3">
                <label for="type">Type</label>
                <select class="form-select" name="type_id" id="type">
                    <option @selected(!old('type_id', $project->type_id)) value="">No type</option>
                    @foreach ($types as $type)
                        <option @selected(old('type_id' , $project->type_id ) == $type->id) value="{{ $type->id}}">{{ $type->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <strong>Edit the technologies used : </strong>
                    @foreach ($technologies as $technology)
                        <div class="form-check">
                            <label for="(technology-{{$technology->id}})"> {{$technology->name}}</label>
                            <input @checked($project->technologies->contains($technology)) type="checkbox" name="technologies[]" id="technology-{{$technology->id}}" value="{{$technology->id}}">
                        </div>
                    @endforeach
                @error('technologies')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control " id="description" rows="3" name="description">{{ old('description' , $project->description)}}</textarea>
            </div>

            <button class="btn btn-warning" type="submit">Edit</button>
        </form>
    </div>
@endsection