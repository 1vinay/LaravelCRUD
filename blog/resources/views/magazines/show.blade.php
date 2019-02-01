
@extends('layouts.app')
       @section('main')
	   <h1>{{$magazine->magazine}}</h1>
        <ul>
		
			{{$magazine->region}}
			{{$magazine->website}}
				
		  <li>
		</ul>
		
		<form action="{{route('magazines.store')}}" method="post">
		
		  <label for="magazine"> Magazine name </label>
		  <input type="text" name="magazine">
		  <label for="region"> Region name </label>
		  <input type="text" name="region">
		<label for="website"> website  </label>
		  <input type="text" name="website">
		</form>
        @endsection