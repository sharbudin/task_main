@extends('contacts.layout')
@section('content')


<div class="card">
  <div class="card-header">Products Page</div>
  <div class="card-body">

        <div class="card-body">
        <p class="card-text">Image : {{ $products->product_img }}</p>
        <h5 class="card-title">Name : {{ $products->product_name }}</h5>
        <p class="card-text">Cost : {{ $products->product_cost }}</p>
        <p class="card-text">Description : {{ $products->product_desc }}</p>
        <p class="card-text">Stock# : {{ $products->product_stock }}</p>
        <p class="card-text">Status: {{ $products->product_is_active }}</p>
  </div>

    </hr>

  </div>
</div>

