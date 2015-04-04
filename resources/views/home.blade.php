@extends('layouts.base')

@section('title')
    Home
@stop

@section('welcome')
    @include('blocks.welcome_content')
@stop

@section('content')
    @include('blocks.content')
@stop