<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\Animal;

class AnimalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    


     function index()
    {
        $animals = Animal::all();  
        return view ('Animals',['animals' => $animals]);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function create()
    {
        return view('Add'); 
    }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'height' => 'required',
        ]);
        $animal = new Animal;

        $animal->type = $request->type;
        $animal->name = $request->name;
        $animal->gender = $request->gender;
        $animal->age = $request->age;
        $animal->height = $request->height;

        $animal->save();

        //var_dump($request->type);
    }

//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
        public function show($id)
        {
            $animal = Animal::findOrFail($id);  
            return view ('Animal',['animal' => $animal]);
            
            //var_dump($id); 
        }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//     }
}
