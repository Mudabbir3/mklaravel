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
            <img height="150" class="img-responsive img-round" src="{{$user->photo_id? $user->photo->photo : url('images/Placeholder.jpg')}}">
        </div>

        <div class="col-sm-9">
            {!! Form::model($user, ['method'=>'PATCH', 'action'=>['Limitless@update', $user->id], 'files'=>true]) !!}

            <div class="form-group">
                {!! form::label('name', 'Name')!!}
                {!! form::text('name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
             {!! form::label('email', 'Email') !!}
             {!! form::email('email', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! form::label('photo_id','Image') !!}
                {!! form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
             {!! form::label('role_id', 'Role') !!}
             {!! form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
             {!! form::label('is_active', 'Status') !!}
             {!! form::select('is_active', array(1=>'Active',0=>'Not Active'), null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
             {!! form::submit('Update', ['class'=>'btn btn-primary col-sm-6']) !!}
            </div>

            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE', 'action'=>['Limitless@destroy', $user->id]]) !!}

            <div class="form-group">
                {!! form::submit('DELETE', ['class'=>'btn btn-danger col-sm-6']) !!}
            </div>

            <div class="row">
                <div class="form-group col-sm-12">
                    @include('include_errors.form_error')
                </div>
            </div>

            {!! Form::close() !!}

        </div>
    <div>

@stop