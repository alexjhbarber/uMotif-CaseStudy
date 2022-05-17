@extends('templates.master')
 
@section('title', 'Page Title')


@section('content')


<form action="{{url('results')}}" method="post">
@csrf
    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" />

    <label for="date_of_birth">Date of birth:</label>
    <input type="date"  id="date_of_birth"  name="date_of_birth"/>

    <label for="frequency">Frequency of migranes:</label>
    <select id="frequency" name="frequency">
        <option value=""></option>
        <option value="Monthly">Monthly</option>
        <option value="Weekly">Weekly</option>
        <option value="Daily">Daily</option>
    </select>


    <label for="daily">Amount per day:</label>
    <select id="daily" name="daily">
        <option value=""></option>
        <option value="1-2">1-2</option>
        <option value="3-4">3-4</option>
        <option value="5+">5+</option>
    </select>

    <input type="submit">
</form>


@endsection