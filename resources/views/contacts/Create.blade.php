@extends('contacts.layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('index') }}" method="post">
        {!! csrf_field() !!}
        <label>Id</label></br>
        <input type="text" name="id" id="id" class="form-control"></br>
        <label>Employee_ID</label></br>
        <input type="text" name="Employee_ID" id="Employee_ID" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email</label></br>
        <input type="email" name="email" id="email" class="form-control"></br>
        <label>Password</label></br>
        <input type="password" name="password" id="password" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
