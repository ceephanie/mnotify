
@extends('contacts.layout')
@section('content')
<div class="card">
  <div class="card-header">Contacts Page</div>
  <div class="card-body">
      
      <form action="{{ url('save-contact') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="nameOfSpecificContact" id="name" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="valueOfSpecificContact" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop