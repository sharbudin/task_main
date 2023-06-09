@extends('contacts.layout')
@section('content')

<div class="card">
  <div class="card-header">Products Page</div>
  <div class="card-body">

      <form action="{{ url('contact/' .$products->id) }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$products->id}}" id="id" />
        <label></label></br>
        <label>Image</label></br>
        <input type="file" name="product_img" id="product_img"  class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="product_name" id="product_name" value="{{$products->product_name}}" class="form-control"></br>
        <label>Cost</label></br>
        <input type="text" name="product_cost" id="product_cost" value="{{$products->product_cost}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="product_desc" id="product_desc" value="{{$products->product_desc}}" class="form-control"></br>
        <label>Stock</label></br>
        <input type="text" name="product_stock" id="product_stock" value="{{$products->product_stock}}" class="form-control"></br>
        <label>Status</label>
        @if ($products->product_is_active == 1)
            <div class="">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="product_is_active" id="product_is_active" value="1"
                    checked required>
                    <span class="form-check-label" for="inlineRadio1">True</span>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="product_is_active" id="product_is_inactive"
                        value="0">
                    <span class="form-check-label" for="inlineRadio2">False</span>
                </div>
            </div>
        @else
        <div class="">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="product_is_active" id="product_is_active" value="1"
                    required>
                <span class="form-check-label" for="inlineRadio1">True</span>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="product_is_active" id="product_is_inactive"
                checked value="0">
                <span class="form-check-label" for="inlineRadio2">False</span>
            </div>
        </div>
        @endif
        <br><br>
        <div><input type="submit" value="Update" class="btn btn-success"> <a class="btn btn-dark" href="{{ url('/contact') }}"><b>Back</b></a></p></div>

    </form>

  </div>
</div>

@stop
