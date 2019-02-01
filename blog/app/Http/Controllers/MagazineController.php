<?php

namespace App\Http\Controllers;

use App\Magazine;
use App\Newspaper;
use Illuminate\Http\Request;

class MagazineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	
	
    public function index()
    {
        $magazines=Magazine::all();
		return view('magazines.index', ['magazines'=>$magazines]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('magazines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Magazine::create($request->all());
		return redirect('magazines');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function show(Magazine $magazine)
    {
        return view('magazines.show', ['magazine'=>$magazine]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function edit(Magazine $magazine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Magazine $magazine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Magazine $magazine)
    {
        //
    }
	
	
}
