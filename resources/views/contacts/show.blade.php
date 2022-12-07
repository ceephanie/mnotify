@extends('contacts.layout')
@section('content')
<div class="card">
  <div class="card-header"> Contacts Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $contacts->name }}</h5>
        <p class="card-text">Mobile : {{ $contacts->mobile }}</p>
  </div>
      
    </hr>
  
  </div>
</div>