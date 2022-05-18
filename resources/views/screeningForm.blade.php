@extends('templates.master')
 
@section('title', 'Participation Form')


@section('content')

<h1>Participation Form</h1>
<form id="participantForm" name="participantForm" action="{{url('results')}}" method="post">
@csrf

    <div id="name" class="formInput">
        <p>First Name:</p>
        <input type="text" name="first_name" />

        <div><label for="first_name">Please insert first name</label></div>
    </div>
        
    <div id="dob" class="formInput"> 
        <p>Date of birth:</p>
        <input type="date"  id="date_of_birth"  name="date_of_birth"/>

        <div><label for="date_of_birth">Please insert date of birth</label></div>
    </div>
        
    <div id="freq" class="formInput">
        <p>Frequency of migranes:</p> 
        <select id="frequency" name="frequency">
            <option value=""></option>
            <option value="Monthly">Monthly</option>
            <option value="Weekly">Weekly</option>
            <option value="Daily">Daily</option>
        </select>  

        <div><label for="frequency">Please select frequency</label></div>
    </div>
    

    <div id="numPerDay" class="formInput">
        <p>Amount per day:</p> 
        <select id="daily" name="daily">
            <option value=""></option>
            <option value="1-2">1-2</option>
            <option value="3-4">3-4</option>
            <option value="5+">5+</option>
        </select>

        <div><label for="daily">Please select Amount Per Day</label></div>
    </div>
    

</form>
<button  onclick="validateForm()" class="btn"> submit</button>
@endsection