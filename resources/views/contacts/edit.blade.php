@extends('contacts.layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('index' .$contacts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>Id</label></br>
        <input type="text" name="id" id="id" value="{{$contacts->id}}" id="id" />
        <label>Employee_ID</label></br>
        <input type="text" name="Employee_ID" id="Employee_ID" value="{{$contacts->Employee_ID}}" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$contacts->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="email" name="email" id="email" value="{{$contacts->email}}" class="form-control"></br>
        <label>Password</label></br>
        <input type="password" name="password" id="password" value="{{$contacts->password}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
