@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Types available</h2>

        <div class="row">
            <div class="col-6">
                
                <table class="table table-striped mt-5">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($types as $type)
                            <tr>
                                <th scope="row">{{$type->id}}</th>
                                <td>{{$type->name}}</td>
                                <td>{{$type->slug}}</td>
                                <td>
                                    <a class="btn btn-success" href="{{route('admin.types.show', ['type' => $type->slug]) }}">Details</a>
                                </td>
                          </tr>
                        @endforeach 
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection