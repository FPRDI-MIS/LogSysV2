<?php

namespace App\Http\Controllers;

use App\LogRecords;
use App\User;
use App\Classes;
use Illuminate\Http\Request;
use DB;

class LogSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$logs = DB::select('SELECT * FROM log_records WHERE DATE(created_at) = CURDATE()');

        $employees = User::select('fullname')->orderBy('fullname')->get();
        $employee = [];
        foreach($employees as $name) {
            $employee[$name->fullname] = $name->fullname;
        }
        
        $classes = Classes::select('classes')->orderBy('id')->get();
        $class = [];
        foreach($classes as $visitorclass) {
            $class[$visitorclass->classes] = $visitorclass->classes;
        }

        $logs = LogRecords::whereDay('created_at', date('d'))->get();
        return view('pages.frontpage')->with('logs', $logs)->with('employee', $employee)->with('class', $class);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'Name' => 'required',
            'Address' => 'required',
            'Contact' => 'required',
            'Sex' => 'required',
            'PersonToBeVisited' => 'required',
            'Purpose' => 'required',
            'Classification' => 'required'
        ]);

            //Create Logs

        $logs = new LogRecords;
        $logs->name = $request->input('Name');
        $logs->address = $request->input('Address');
        $logs->sex = $request->input('Sex');
        $logs->classification = $request->input('Classification');
        $logs->persontovisit = $request->input('PersonToBeVisited');
        $logs->purpose = $request->input('Purpose');
        $logs->contactno = $request->input('Contact');
        $logs->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LogRecords  $logRecords
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $logs = LogRecords::find($id);
        return view('popups.logout')->with('logs', $logs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LogRecords  $logRecords
     * @return \Illuminate\Http\Response
     */
    public function edit(LogRecords $logRecords)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LogRecords  $logRecords
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request->all()); // For testing

        $logs = LogRecords::findOrFail($request->id);
        $logs->touch();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LogRecords  $logRecords
     * @return \Illuminate\Http\Response
     */
    public function destroy(LogRecords $logRecords)
    {
        //
    }
}
