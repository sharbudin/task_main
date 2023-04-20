@extends('contacts.layout')
@section('content')

<div class="card">
  <div class="card-header">Products Page</div>
  <div class="card-body">

      <form action="{{ url('contact') }}" method="post">
        {!! csrf_field() !!}
        <label>Image</label></br>
        <input type="file" name="product_img" id="product_img" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="product_name" id="product_name" class="form-control" required></br>
        <label>Cost</label></br>
        <input type="number" name="product_cost" id="product_cost" class="form-control" required></br>
        <label>Description</label></br>
        <input type="text" name="product_desc" id="product_desc" class="form-control"></br>
        <label>Stock#</label></br>
        <input type="number" name="product_stock" id="product_stock" class="form-control" required></br>
        <label>Status</label>
        <div class="">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="product_is_active" id="product_is_active" value="1"
                    required>
                <span class="form-check-label" for="inlineRadio1">True</span>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="product_is_active" id="product_is_inactive"
                    value="0">
                <span class="form-check-label" for="inlineRadio2">False</span>
            </div>
        </div>
        <br><br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
