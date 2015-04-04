@extends('layouts.base')

@section('title')
Login
@stop

@section('content')
    @include('auth.login._form')
@stop