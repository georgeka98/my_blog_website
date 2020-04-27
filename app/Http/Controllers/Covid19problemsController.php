<?php

namespace App\Http\Controllers;

use App\Covid_issue;
use Illuminate\Http\Request;
use Session;

class Covid19problemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('covid19reachout.welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'issue' => "required|max:2048|min:8",
            'email' => 'nullable|email|max:255'
        ));

        $issue = new Covid_issue;

        $issue->issue = $request->issue;
        $issue->email = $request->email;

        $issue->save();

        Session::flash('success', "Your response has been recorded. Stay safe!"); 

        return view('pages.welcome');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Covid_issue  $covid_issue
     * @return \Illuminate\Http\Response
     */
    public function show(Covid_issue $covid_issue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Covid_issue  $covid_issue
     * @return \Illuminate\Http\Response
     */
    public function edit(Covid_issue $covid_issue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Covid_issue  $covid_issue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Covid_issue $covid_issue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Covid_issue  $covid_issue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Covid_issue $covid_issue)
    {
        //
    }
}
