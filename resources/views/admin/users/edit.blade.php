@extends('layouts.admin')

@section('content')

    <h1>Edit Users</h1>
<div class="row">

    

    <div class="col-sm-3">
            <img height="50" src="{{$user->photo ? $user->photo->file : 'https://via.placeholder.com/350x150'}}" alt="Nie ma foty" class="img-responsive img-rounded">
    </div>

    <div class="col-md-9">
        

        {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}
            <div class='form-group'>
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Wpisz nazwe']) !!}
            </div>

            <div class='form-group'>
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class'=>'form-control','placeholder'=>'Wpisz nazwe']) !!}
            </div>

            <div class='form-group'>
                {!! Form::label('role_id', 'Role:') !!}
                {!! Form::select('role_id',$roles, null, ['class'=>'form-control']) !!}
            </div>

            <div class='form-group'>
                {!! Form::label('is_active', 'Status:') !!}
                {!! Form::select('is_active', array(1 =>'Active', 0=>'Not Active'), null, ['class'=>'form-control']) !!}
            </div>

            <div class='form-group'>
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>

            <div class='form-group'>
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', ['class'=>'form-control','placeholder'=>'Wpisz haslo']) !!}
            </div>

            <div class='form-group'>
                {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
</div>

    <div class="row">
            @include('includes.form_error')
    </div>


    
    
@endsection