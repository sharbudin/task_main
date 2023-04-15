@extends('contacts.layout')
@section('content')


<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Employee_ID : {{ $contacts->Employee_ID }}</h5>
        <p class="card-text">Name : {{ $contacts->Name }}</p>
        <p class="card-text">Email : {{ $contacts->Email }}</p>
        <p class="card-text">Password : {{ $contacts->Password }}</p>
  </div>

   </hr>

  </div>
</div>
