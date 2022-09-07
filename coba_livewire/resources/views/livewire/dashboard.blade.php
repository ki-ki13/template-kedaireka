@extends('layouts/main')

@section('container')
<div class="container-fluid flex-grow-1">
    <h3 class="my-4 judul"> {{ $title }} </h3>
    <div class="card border-light mb-3">
      <div class="card-body table-responsive">
        <h5 class="my-4 mx-2"> 
          <i class="material-icons-round bi me-2">{{ $icon }}</i>
          {{ $ket }}{{ $title }} 
        </h5>
@endsection