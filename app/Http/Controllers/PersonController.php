<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Person::all();
        return view('people.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('people.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $new_person = new Person();
        $new_person->name = request('name');
        $new_person->designation = request('designation');
        $new_person->profile_link = request('profile_link');
        $new_person->imagepath = request('imagepath');
        $new_person->save();

        return redirect('/people');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $new_person = Person::find($id);
        return view('people.show',compact('new_person'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $new_person = Person::findOrFail($id);
        return view('people.edit' , compact('new_person'));

        


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        $new_person = Person::find($id);

        $new_person = new Person();
        $new_person->name = request('name');
        $new_person->designation = request('designation');
        $new_person->profile_link = request('profile_link');
        $new_person->imagepath = request('imagepath');
        $new_person->save();

        return redirect('/people' .$new_person->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Person::where('id',$id)->delete();
        return redirect('/people');
    }
}
