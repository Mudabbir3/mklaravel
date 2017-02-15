@extends('layouts/master')

@section('page_header')
    <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Movies</span> - Movies List</h4>
@stop

@section('breadcrumb')
    <li><a href="{{route('movies.index')}}"><i class="icon-home2 position-left"></i>Movies</a></li>
    {{--<li><a href="components_modals.html">Edit</a></li>--}}
    <li class="active">View</li>
@stop

@section('content')

    @if(Session::has('deleted_movies'))
        <p class="bg bg-danger">{{session('deleted_movies')}}</p>
    @endif


    <div class="row">
        <div class="col-sm-2">
            <a href="{{route('movies.create')}}"><button class="btn btn-primary col-sm-12">Create</button></a>
        </div>

        <div class="col-sm-10">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Photo</th>
                    <th>Movie</th>
                    <th>Genre</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                      @foreach($movies as $movie)
                          <tr>
                              <td>{{$movie->id}}</td>
                              <td><img height="50" src="{{$movie->photo? $movie->photo->photo : url('/images/Placeholder.jpg')}}"></td>
                              <td>{{$movie->name}}</td>
                              <td>{{$movie->genre->name}}</td>
                              <td>{{$movie->created_at}}</td>
                              <td>{{$movie->updated_at}}</td>
                              <td><a href="{{route('movies.edit',[$movie->id])}}"><button class="btn btn-success col-sm-6">Update</button></a>
                                  <a href="{{route('movies.destroy',[$movie->id])}}"><button class="btn btn-danger col-sm-6">Delete</button></a></td>
                          </tr>
                      @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop

