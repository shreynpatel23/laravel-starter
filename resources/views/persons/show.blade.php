@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="py-2 d-flex align-items-center gap-4">
        <h1 class="display3 py-4">Person Details</h1>
    </div>
    <div class="row pt-3">
        <h3 class="display4">{{$person -> fname}} {{$person -> lname}}</h3>            
        <p>{{$person -> email}}</p>            
        <hr>
    </div>
</div>
@endsection