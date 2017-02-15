@extends('layouts/master')


@section('page_header')
    <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Edit</span> - User Edit</h4>

@stop

@section('breadcrumb')
    <li><a href="{{route('limitless.index')}}"><i class="icon-home2 position-left"></i>Admin</a></li>
    {{--<li><a href="components_modals.html">Edit</a></li>--}}
    <li class="active">Edit</li>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-3">
            <img height="50" class="img-responsive img-round" src="{{$movie->photo_id? $movie->photo->photo : url('images\Placeholder.jpg')}}">
        </div>

        <div class="col-sm-9">
            {!! Form::model($movie, ['method'=>'PATCH','action'=>['MoviesController@update', $movie->id],'files'=>true ]) !!}

            <div class="form-group">
                {!! Form::label('name','Movie Name') !!}
                {!! Form::text('name', NULL, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('genre_id', 'Genre') !!}
                {!! Form::select('genre_id', $genres, NULL, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Image') !!}
                {!! Form::file('photo_id', NULL, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('UPDATE MOVIE', ['class'=>'btn btn-primary col-sm-6']) !!}
            </div>

            {!! FORM::close() !!}

            {!! Form::open(['method'=>'DELETE', 'action'=>['MoviesController@destroy',$movie->id]]) !!}

            <div class="form-group">
                {!! Form::submit('DELETE MOVIE',['class'=>'btn btn-danger col-sm-6']) !!}
            </div>

            <div class="row">
                <div class="form-group col-sm-12">
                    @include('include_errors.form_error')
                </div>
            </div>

            {!! Form::close() !!}

        </div>

    </div>
@stop
