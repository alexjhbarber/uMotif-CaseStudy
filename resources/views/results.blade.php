@extends('templates.master')
 
@section('title', 'Results Page')


@section('content')



@if($verified)
    <h2>Participant {{$name}} is assigned to Cohort {{$cohort}}</h2> 
@else
    <h2>Participants must be over 18 years of age</h2> 
@endif



@endsection