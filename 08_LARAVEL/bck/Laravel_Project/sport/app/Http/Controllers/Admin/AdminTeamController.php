<?php

namespace App\Http\Controllers\Admin;

use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Middleware\IsAdmin;

class AdminTeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(IsAdmin::class);

    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::get();
        //dump($team);
        return view('admin.teams.index')->with('teams' , $teams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'country' => 'max:255',
            //'flag' => 'alpha_dash|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //dd($request);

        $team = null;

        if(isset($request->id)){
            $team = Team::find($request->id);
            $action = 'modifié';
        }
        else{
            $team = new Team;
            $action = 'crée';
        }
        
        $team->name = $request->name;

        //dd($request->hasFile('flag'));

        if ($request->hasFile('flag')) 
        {
            $flag = $request->file('flag');
            $name = time().'.'.$flag->getClientOriginalExtension();
            $destinationPath = public_path('/img/flag');
            $imagePath = $destinationPath. "/".  $name;
            $flag->move($destinationPath, $name);
            $team->flag = $name;
        }


        if(isset($request->country)){
            $team->country = $request->country;
        }
        else{
            $team->country = 'default';
            $team->flag = 'default.png';
        }

        $team->save();  

        $teams = Team::get();
        return redirect('admin/teams')->with('status' , 'Team '.$action.' avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.teams.edit')->with('team', $team);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //USE OF STORE METHOD
        


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //dump($team);
        //dump('team id:'.$team->id. ' deleted');
        $team = Team::find($team->id);
        $team->delete();

        $teams = Team::get();
        return view('admin.teams.index')
        ->with('teams' , $teams)
        ->with('status' , 'Team supprimée avec succès !');
    }
}
