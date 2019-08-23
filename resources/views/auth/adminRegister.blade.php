@extends('layouts.front.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('auth_admin.register_admin')</div>

                <div class="card-body">
                    {!! Form::open(['method' => 'POST', 'routes' => 'register']) !!}
                        @include('includes.form_validation')
                        <div class="form-group row">
                            {!! Form::label('name', trans('auth_admin.name'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {{ Form::text('name', old('name'), ['id' => 'name', 'class' => 'form-control @error("name") is-invalid @enderror', 'required' => 'required', 'autocomplete' => 'name', 'autofocus' => 'autofocus'])}}
                                @include('includes.form_validation')
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('email', trans('auth_admin.email'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {{ Form::email('email', old('email') ? "old('email')" : null,['id' => 'email', 'class' => 'form-control @error("email") is-invalid @enderror', 'required' => 'required', 'autocomplete' => 'email', 'autofocus'=>'autofocus']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password', trans('auth_admin.password'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {{ Form::password('password', ['id' => 'password', 'class' => 'form-control @error("password") is-invalid @enderror', 'required' => 'required', 'autocomplete' => 'password']) }}

                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password-confirm', trans('auth_admin.confirm_password'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {{ Form::password('password_confirmation', ['id' => 'password-confirm', 'class' => 'form-control', 'required' => 'required', 'autocomplete' => 'new-password']) }}

                                @include('includes.form_validation')
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {{ Form::submit(trans('auth_admin.register'), ['class' => 'btn btn-primary']) }}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
