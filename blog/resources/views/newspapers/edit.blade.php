
@extends('layouts.app')
       @section('main')
	   <h1>{{$newspaper->article}}</h1>
        <ul>
		
			{{$newspaper->region}}
			{{$newspaper->website}}
				
		  <li>
		</ul>
		
		<form action="{{route('magazines.update', $newspaper)}}" method="post">
			{{method_field('patch')}}
		  
		  @foreach($magazines as $id => $magazine)
		  <div>
		  
		   <label for="{{$market}}">

           <input type="checkbox" name="magazines[]" value="{{$id}}">
			   {{$newspaper->magazines()
			               ->allRelatedIds()
						   ->contains($id)? "checked"}}
		   
			   {{$magazine}}		   
			 
           </label>			 
		  </div>
		  
		  
		</form>
        @endsection