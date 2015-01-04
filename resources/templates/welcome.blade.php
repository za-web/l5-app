@extends('layout.app')
@section('title')
    {{trans('messages.home')}}
@stop
@section('content')
    <div class="well">{{ Inspiring::quote() }}</div>
@stop