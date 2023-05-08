@extends('contacts.layout')
@section('content')


<div class="card">
  <div class="card-header">Products Page</div>
  <div class="card-body">

        <div class="card-body">
        <img src="{{asset('image/'.$products->product_img)}}" alt="" style="width: 200px;height:200px">
        <br><br>
        <h5 class="card-title">Name : {{ $products->product_name }}</h5>
        <p class="card-text">Cost : {{ $products->product_cost }}</p>
        <p class="card-text">Description : {{ $products->product_desc }}</p>
        <p class="card-text">Stock : {{ $products->product_stock }}</p>
        <p> Status: @if ($products->product_is_active)
        Available
        @else
        Not Available
        @endif
        </p>
        <div><a class="btn btn-dark" style="background-color: blue" href="{{ url('/contact') }}"><b>Print</b></a> <a class="btn btn-dark" href="{{ url('/contact') }}"><b>Back</b></a></div>
  </div>

    </hr>

  </div>
</div>

