@extends('layouts.admin.app')

@section('content')
<h1>@lang('user_admin.edit_user') {{$user->name}}</h1>
@include('includes.errors')

{!! Form::open(['method' => 'PUT', 'route' => ['admin.users.update', $user]]) !!}
    <div class="form-group row">
        <div class="col-md-12 text-center">
            <div class="avatar mx-auto">
                <img src="/img/user.jpg"/>
            </div>
            {{ Form::button(trans('change_avatar'), ['class' => 'btn btn-xs btn-default']) }}
        </div>
    </div>

    <div class="form-group row">
        {!! Form::label('name', trans('name'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
        <div class="col-md-6">
            {{ Form::text('name', $user->name , ['id' => 'name', 'class' => 'form-control', 'required' => 'required'])}}
        </div>
    </div>

    <div class="form-group row">
        {!! Form::label('email', trans('email'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
        <div class="col-md-6">
            {{ Form::email('email', $user->email ,['id' => 'email', 'class' => 'form-control disabled', 'required' => 'required']) }}
        </div>
    </div>

    <div class="form-group row">
        {!! Form::label('phone', trans('phone'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
        <div class="col-md-6">
            {{ Form::text('phone', $user->phone , ['id' => 'phone', 'class' => 'form-control'])}}
        </div>
    </div>

    <div class="form-group row">
        {!! Form::label('address', trans('address'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
        <div class="col-md-6">
            {{ Form::text('address', $user->address , ['id' => 'phone', 'class' => 'form-control'])}}
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            {{ Form::submit(trans('user_admin.update'), ['class' => 'btn btn-primary']) }}
        </div>
    </div>
{!! Form::close() !!}
@endsection
