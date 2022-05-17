@extends('templates.master')
 
@section('title', 'Page Title')


@section('content')



@if($verified)
    verified
@else
    not verified
@endif

@endsection