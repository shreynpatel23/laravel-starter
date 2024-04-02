@extends('layouts.admin')

    @section('content')
    <div class="container">
        <div class="py-2 d-flex align-items-center gap-4">
            <h1 class="display3 py-4">Create Person</h1>
        </div>
        <form class="mt-3" style="width: 20rem" method="POST" accept="{{ route('persons.store')}}">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ csrf_field() }}
            <div class="mb-3">
              <label for="fname" class="form-label">First Name</label>
              <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your first name" aria-describedby="First name of the person">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your last name" aria-describedby="Last name of the person">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" aria-describedby="Email of the person">
            </div>
            <div class="py-3 d-flex align-items-center gap-4">
                <a href="{{ route('persons.index')}}" class="btn btn-light">Cancel</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
    </div>
@endsection