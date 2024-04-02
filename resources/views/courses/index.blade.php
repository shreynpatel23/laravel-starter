@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="display3 py-4">Courses List</h1>
    <div class="row pt-3">
        @foreach ($courses as $course)
            <h2 class="display4">{{$course -> course_id}}</h2>            
            <p>{{$course -> course_name}}</p>            
            <p>{{$course -> course_desc}}</p>            
            <hr>
        @endforeach
    </div>
</div>
@endsection