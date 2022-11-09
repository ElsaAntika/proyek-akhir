@extends('layouts.main')

@section('first-content')

<div class="card my-2">
    <div class="card-header">
        Data Person
</div>

   
</div>

<div class="card body">
    <p> Elsa Antika {{$person->name}}</p>
    <p> Elsa@mail.com {{$person->email}}</p>
</div>

@endsection