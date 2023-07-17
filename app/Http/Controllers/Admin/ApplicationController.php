<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;
use Auth;
class ApplicationController extends Controller
{
    function __construct()
    {
        $this->middleware('role_or_permission:Application access|Application create|Application edit|Application delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Application create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Application edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Application delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications = Application::orderBy('id', 'DESC')->get();
    
        return view('application.index', ['applications' => $applications]);
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('application.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->all();
        $data['user_id'] = Auth::user()->id;
        $Contact = Contact::create($data);
        return redirect()->back()->withSuccess('Contact created !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        // dd($application->id);
       return view('application.edit',['application' => $application]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        $application->update($request->all());
        return redirect()->back()->withSuccess('Job updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        $application->delete();
        return redirect()->back()->withSuccess('application deleted !!!');
    }
}
