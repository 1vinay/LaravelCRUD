
@extends('layouts.app')
       @section('main')
	   <h1>{{$newspaper->article}}</h1>
        <ul>
		
			{{$newspaper->region}}
			{{$newspaper->website}}
				
		  <li>
		</ul>
		
		<form action="{{route('newspapers.store')}}" method="post">
		
		  <label for="article"> Article name </label>
		  <input type="text" name="article">
		  <label for="region"> Region name </label>
		  <input type="text" name="region">
		<label for="website"> website  </label>
		  <input type="text" name="website">
		</form>
        @endsection