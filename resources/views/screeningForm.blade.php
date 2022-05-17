@extends('templates.master')
 
@section('title', 'Participation Form')


@section('content')


<form name="participantForm" action="{{url('results')}}" onsubmit="return validateForm()" method="post">
@csrf

<div>
    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" />
</div>
    
<div>
    <label for="date_of_birth">Date of birth:</label>
    <input type="date"  id="date_of_birth"  name="date_of_birth"/>
</div>
    
<div>
    <label for="frequency">Frequency of migranes:</label>
    <select id="frequency" name="frequency">
        <option value=""></option>
        <option value="Monthly">Monthly</option>
        <option value="Weekly">Weekly</option>
        <option value="Daily">Daily</option>
    </select>  
</div>
    

    <div id="numPerDay">
        <label for="daily">Amount per day:</label>
        <select id="daily" name="daily">
            <option value=""></option>
            <option value="1-2">1-2</option>
            <option value="3-4">3-4</option>
            <option value="5+">5+</option>
        </select>

    </div>
    

    <input type="submit">
</form>

@endsection