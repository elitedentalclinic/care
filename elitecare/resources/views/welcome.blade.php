@extends('layouts.login')
@section('login-form')
    <div class="w3-card-2  w3-white w3-margin">
        <div class="w3-container w3-center w3-teal">
            <h5>Sign in with your Elite Account</h5>
        </div>
        {!! Form::open(array('url' => '/login', 'class'=>'w3-container'))   !!}
        <div class="input-group margin-bottom-sm">
            <i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i>
            {!! Form::label('email', 'Email', array('class'=>'w3-label w3-validate w3-small')) !!}
            {!! Form::email('email', null, ['placeholder'=>'Email address','class' =>'w3-input', 'required'=>'true'] )  !!}
         </div>
        <div class="input-group margin-bottom-sm">
            <i class="fa fa-key fa-fw" aria-hidden="true"></i>
            {!! Form::label('password', 'Password', array('class'=>'w3-label w3-validate w3-small')) !!}
            {!! Form::password('password',  ['placeholder'=>'Password','class' =>'w3-input', 'required'=>'true']) !!}
        </div>
            {!! Form::submit('Login', ['class' => 'w3-btn-block w3-blue edc-log-btn']) !!}
        {!! Form::close()   !!}
    </div>

    <p class="w3-small w3-center ">&copy; 2016  elite dental care</p>

 @include('_error')

 @endsection