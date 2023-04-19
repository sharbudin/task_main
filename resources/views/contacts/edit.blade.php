@extends('contacts.layout')
@section('content')

<div class="card">
  <div class="card-header">Products Page</div>
  <div class="card-body">

      <form action="{{ url('contact/' .$products->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$products->id}}" id="id" />
        <label></label></br>
        <label>Image</label></br>
        <input type="image" name="product_img" id="product_img" value="{{$products->product_img}}" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="product_name" id="product_name" value="{{$products->product_name}}" class="form-control"></br>
        <label>Cost</label></br>
        <input type="text" name="product_cost" id="product_cost" value="{{$products->product_cost}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="product_desc" id="product_desc" value="{{$products->product_desc}}" class="form-control"></br>
        <label>Stock#</label></br>
        <input type="text" name="product_stock" id="product_stock" value="{{$products->product_stock}}" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="product_is_active" id="product_is_active" value="{{$products->product_is_active}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
