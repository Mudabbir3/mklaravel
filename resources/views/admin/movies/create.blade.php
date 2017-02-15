@extends('layouts/master')

@section('page_header')
    <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Movies</span> - Add Movies</h4>
@stop

@section('breadcrumb')
    <li><a href="{{route('movies.index')}}"><i class="icon-home2 position-left"></i>Movies</a></li>
    {{--<li><a href="components_modals.html">Edit</a></li>--}}
    <li class="active">Create</li>
@stop

@section('content')

    <div class="row">

        <div class="col-sm-3">
        </div>

        <div class="col-sm-9">

            {!! Form::open(['method'=>'POST', 'action'=>'MoviesController@store', 'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('name','Movie Name') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('genre_id','Genre') !!}
                {!! Form::select('genre_id', [''=>'Select Genre']+$genre, null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'image') !!}
                {!! Form:: file('photo_id', null, ['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

            @include('include_errors.form_error')

        </div>
    </div>


@stop