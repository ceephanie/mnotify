@extends('groups.layout')
@section('content')
<div class="card">
  <div class="card-header">Groups Page</div>
  <div class="card-body">
      
      <form action="{{ url('update-group/' .$groups->id) }}" method="get">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="newId" id="id" value="{{$groups->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="newName" id="name" value="{{$groups->name}}" class="form-control"></br>
        <label>Number of Contacts</label></br>
        <input type="text" name="newMobile" id="mobile" value="{{$groups->numberofcontacts}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop