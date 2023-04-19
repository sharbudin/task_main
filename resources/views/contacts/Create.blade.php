@extends('contacts.layout')
@section('content')

<div class="card">
  <div class="card-header">Products Page</div>
  <div class="card-body">

      <form action="{{ url('contact') }}" method="post">
        {!! csrf_field() !!}
        <label>Image</label></br>
        <input type="image" name="product_img" id="product_img" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="product_name" id="product_name" class="form-control"></br>
        <label>Cost</label></br>
        <input type="text" name="product_cost" id="product_cost" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="product_desc" id="product_desc" class="form-control"></br>
        <label>Stock#</label></br>
        <input type="text" name="product_stock" id="product_stock" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="product_is_active" id="product_is_active" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
