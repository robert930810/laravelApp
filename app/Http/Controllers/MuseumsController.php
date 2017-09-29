<?php

namespace App\Http\Controllers;

use App\Museum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MuseumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $museums =  Museum::all();
        return view("museums.index")->with('museums',$museums);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("museums.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name= $request->input('name');
        $description=$request->input('description');
        $address=$request->input('address');
        $hours=$request->input('hours');
        $rating=$request->input('rating');

        $rules=['name'=>'required','description'=>'required'];

        $message=['name.required'=>'the "Name" field is obligatory', 'description.required'=>'the "Description" field is obligatory'];

        $validator=Validator::make($request->all(),$rules,$message);

        if ($validator->fails()) {
            flash("We couldn't save your museum")->error();
            return redirect()->action('MuseumsController@create')->withErrors($validator)->withInput();
        }

        
        $museum= new Museum();
        $museum->name=$name;
        $museum->description=$description;
        $museum->address=' plaza de toros';
        $museum->hours='9am -5 pm';
        $museum->rating='8.5';

        $museum->save();

        flash('museum saved successfully')->success();
        return redirect()->action('MuseumsController@create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*

        $users =  User::all();
        return view("users.index")->with('users',$users);
        */
        $museum=Museum::find($id);
        //$museum->name=$name;
        return view("museums.show")->with('museum',$museum);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
