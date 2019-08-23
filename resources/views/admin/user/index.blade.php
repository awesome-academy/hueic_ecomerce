@extends('layouts.admin.app')

@section('content')
<h1>@lang('user_admin.manage_user')</h1>
@include('includes.errors')
<div class="row my-3">
    <div class="col-sm-12 col-md-6">
        {!! Form::open(['method' => 'GET', 'route' => ['admin.users.index'], 'class' =>'d-flex']) !!}
            {!! Form::label('search', trans('user_admin.search'), ['class' => 'col-form-label text-md-right']) !!}
            {{ Form::text('search', isset($search)? $search : '', ['id' => 'search', 'class' => 'form-control ml-3', 'autocomplete' => 'name', 'autofocus' => 'autofocus'])}}
            {{ Form::submit(trans('user_admin.search'), ['class' => 'btn btn-primary btn-sm ml-2']) }}
        {!! Form::close() !!}
    </div>
</div>

<table id="table-user" class="table table-striped w-100" role="grid">
    <thead>
        <tr role="row">
            <th tabindex="0" colspan="1" class="name" >@lang('user_admin.stt')</th>
            <th tabindex="0" colspan="1" class="name" >@lang('user_admin.name')</th>
            <th rowspan="1" colspan="1" class="email" >@lang('user_admin.email')</th>
            <th rowspan="1" colspan="1" class="phone" >@lang('user_admin.phone')</th>
            <th rowspan="1" colspan="1" class="address" >@lang('user_admin.address')</th>
            <th rowspan="1" colspan="1" class="edit" >@lang('user_admin.edit')</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr role="row" class="{{ $loop->iteration % 2 == 1 ? 'odd' : 'even' }}">
            <td class="sorting_1">{{$loop->iteration}}</td>
            <td class="sorting_1">{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->address}}</td>
            <td class="d-flex p-2">
                <a class="btn btn-sm btn-secondary"
                    href="{{ route('admin.users.edit', $user->id) }}">@lang('user_admin.edit')</a>
                {!! Form::open(['method' => 'DELETE', 'route' => ['admin.users.destroy', $user]]) !!}
                {{ Form::submit(trans('user_admin.delete'), ['class' => 'btn btn-danger btn-sm ml-2']) }}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $users->links() }}
@endsection
