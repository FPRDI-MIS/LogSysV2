<?php

namespace App\Http\Controllers;

use App\Reports;
use App\LogRecords;
use App\Classes;
use App\Purpose;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $month = date('m');
        $logs = LogRecords::whereMonth('created_at', date('m'))->get();
        $contacts = LogRecords::select('name', 'address', 'contactno')->get();
        return view('administrator.admin')->with('logs', $logs)->with('month', $month)->with('contacts', $contacts);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function show(Reports $reports)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function edit(Reports $reports)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reports $reports)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reports $reports)
    {
        //
    }
    
    public function sortByMonth(Request $request)
    {   
        $month = $request->get('Month');
        $logs = LogRecords::whereMonth('created_at', date($month))->get();
        $contacts = LogRecords::select('name', 'address', 'contactno')->get();
        return view('administrator.admin')->with('logs', $logs)->with('month', $month)->with('contacts', $contacts); 
    }

    public function settings()
    {   
        $classes = Classes::all();
        $purposes = Purpose::all();
        return view('administrator.settings')->with('classes', $classes)->with('purposes', $purposes);
    }
}
