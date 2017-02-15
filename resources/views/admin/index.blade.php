@extends('layouts/master')

@section('page_header')
    <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">List</span> - Users List</h4>

@stop

@section('breadcrumb')
    <li><a href="{{route('limitless.index')}}"><i class="icon-home2 position-left"></i>Admin</a></li>
    {{--<li><a href="components_modals.html">Edit</a></li>--}}
    <li class="active">Admin</li>
@stop

@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Image</th>
            <th>Firstname</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td><img height="50" src="{{$user->photo_id? $user->photo->photo: url('images/Placeholder.jpg')}}"></td>
                <td><a href="{{route('limitless.edit',[$user->id])}}">{{$user->name}}</a></td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop