@extends('layouts.app')
@section('content')
@if(Auth::check())

<ul>
	<li>{{Auth::User()->name}}</li>
	<li>{{Auth::User()->email}}</li>
	<li>{{Auth::User()->password}}</li>
	<form action="ReturnForm/{{Auth::User()->id}}">
		<input type="submit">
	</form>
</ul>
 @else
<h1>page reservé admin</h1>
@endif
@stop