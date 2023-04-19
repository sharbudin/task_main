@extends('contacts.layout')
@section('content')


<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

        <div class="card-body">
        <p class="card-text">Emp_ID : {{ $products->Emp_ID }}</p>
        <h5 class="card-title">Name : {{ $products->name }}</h5>

        <p class="card-text">Email: {{ $products->email }}</p>
        <p class="card-text">Mobile : {{ $products->mobile }}</p>
  </div>

    </hr>

  </div>
</div>

