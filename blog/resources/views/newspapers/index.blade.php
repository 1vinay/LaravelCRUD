
@extends('layouts.app')
       @section('main')
        <ul>
		@foreach($newspapers as $newspaper)
		  <li>
		    <a href="{{'newspapers.show', $newspaper}}">
				{{$newspapers->article}}
				</a>
		  <li>
		</ul>
        @endsection