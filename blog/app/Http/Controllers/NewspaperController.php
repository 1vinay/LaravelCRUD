<?php

namespace App\Http\Controllers;

use App\Newspaper;
use App\Magazine;
use Illuminate\Http\Request;

class NewspaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	
	 
	 
    public function index()
    {
        $newspapers = 	Newspaper::all();
        return view('newspapers.index',['newspapers'=>$newspapers]);		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newspapers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			Newspaper::create($request->all());
			return redirect('newspapers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function show(Newspaper $newspaper)
    {
        return view('newspapers.show', ['newspaper' => $newspaper]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function edit(Newspaper $newspaper)
    {
        $magazine = App\Magazine::get()->pluck('article','id')->sortBy('article');
		return view('newpapers.edit', compact('newspaper', 'magazine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newspaper $newspaper)
    {
        $newspaper->update($request->all());
		$newspaper->magazines()->sync($request->magazines);
		return redirect('newspapers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newspaper $newspaper)
    {
        //
    }
	
	
}
