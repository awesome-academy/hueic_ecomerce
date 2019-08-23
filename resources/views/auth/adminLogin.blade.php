@extends('layouts.front.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> @lang('auth_admin.login_admin_page') </div>
                <div class="card-body">
                {!! Form::open(['method' => 'POST', 'routes' => 'admin.login']) !!}

                        <div class="form-group row">
                            {!! Form::label('email', trans('auth_admin.email'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {{ Form::email('email', old('email') ? "old('email')" : null, ['id' => 'email', 'class' => 'form-control @error("email") is-invalid @enderror', 'required' => 'required', 'autocomplete' => 'email', 'autofocus'=>'autofocus']) }}
                                @include('includes.form_validation')

                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password', trans('auth_admin.password'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {{ Form::password('password', ['id' => 'password', 'class' => 'form-control @error("password") is-invalid @enderror', 'required' => 'required', 'autocomplete' => 'current-password']) }}

                                @include('includes.form_validation')

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    {{ Form::checkbox('remember', trans('auth_admin.remember_me'), old('remember') ? 'checked' : '', ['id' => 'remember', 'class' => 'form-check-input']) }}
                                    {!! Form::label('remember', trans('auth_admin.remember_me'), ['class' => 'form-check-label']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {{ Form::submit(trans('auth_admin.login'), ['class' => 'btn btn-primary']) }}
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        @lang('auth_admin.forgot_your_password?')
                                    </a>
                                @endif
                                | <a class="btn btn-link" href="{{ route('admin.showRegister') }}">
                                        @lang('auth_admin.register')
                                </a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
