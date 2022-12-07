
@extends('contacts.layout')
@section('content')
<div class="card">
  <div class="card-header">Contacts Page</div>
  <div class="card-body">
      
      <form action="/update-contact/{{$specificContact->id}}" method='get'>
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="" id="id" />
        <label>Name</label></br>
        <input type="text" name="specificContactName" id="name" value="{{$specificContact->name}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="newMobile" id="mobile" value="{{$specificContact->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop