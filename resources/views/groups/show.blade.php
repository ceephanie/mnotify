@extends('groups.layout')
@section('content')
<div class="card">
  <div class="card-header"> Groups Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $groups->name }}</h5>
        <p class="card-text">Mobile : {{ $groups->mobile }}</p>
  </div>
      
    </hr>
  
  </div>
</div>