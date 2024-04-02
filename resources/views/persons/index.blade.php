@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="py-2 d-flex align-items-center gap-4">
        <h1 class="display3 py-4">Persons List</h1>
        <a href="{{ route('persons.create')}}" class="btn btn-primary">Create User</a>
    </div>
    <div class="row pt-3">
        @foreach ($persons as $person)
            {{-- <a href="{{ route('persons.show', $person -> id)}}">
            </a> --}}
            <h3 class="display4">{{$person -> fname}} {{$person -> lname}}</h3>            
            <p>{{$person -> email}}</p>            
            <div class="pt-2 pb-3 d-flex align-items-center gap-4">
                <a href="{{ route('persons.edit', $person -> id)}}" class="btn btn-success">Edit</a>
                <a href="{{ route('persons.destroy', $person -> id)}}" class="btn btn-danger">Delete</a>
            </div>
            <hr>
        @endforeach
    </div>
</div>
@endsection