@extends('groups.layout')
@section('content')
<div class="card">
  <div class="card-header">Groups Page</div>
  <div class="card-body">
      
      <form action="{{ url('/save-group') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="nameOfGroup" id="name" class="form-control"></br>
        <label>Number of Contacts</label></br>
        <input type="text" name="valueOfMobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop