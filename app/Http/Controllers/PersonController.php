<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonRequest;
use App\Http\Requests\UpdatePersonRequest;
use App\Models\Person;
use App\Models\Student;
use Illuminate\Support\Facades\Session;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('persons.index', ['persons' => Person::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('persons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonRequest $request)
    {
        Person::create($request->validated());
        Session::flash('success', 'Person added successfully');
        return redirect() -> route('persons.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        return view('persons.show',  compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonRequest $request, Person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        Student::destroy($person);
        return redirect() -> route('persons.index');
    }
}
