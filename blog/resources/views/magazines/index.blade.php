@extends('layouts.app')

@section('main')

<ul>

@foreach($magazines as $magazine)
  
  <li>
	<a href="{{'magazines.show', $magazine}}">
		{{$magazines->magazine}}
    </a>
  <li>
@endforeach
 
</ul>

@endsection
