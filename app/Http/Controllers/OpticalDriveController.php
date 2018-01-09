<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\opticaldrive;

class OpticalDriveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opticaldrivedatas = opticaldrive::all(); 
        return view('index.opticaldriveindex')->with('opticaldrivedatas', $opticaldrivedatas);
    }

    // This function is called when you press the "Add button"
    public function add(Request $request, $id) {
        // dd($name);
        // return view('pages.home')-> with('title', $title);
        $title = 'Home'; 
        $opticaldrive = opticaldrive::find($id);
        $request->session()->put('opticaldrive', $opticaldrive);
        $data = $request->session()->all();
        return view('pages.home', ['title' => $title, 'data' => $data]);
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
