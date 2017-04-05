@extends('layouts.app')

@section('content')
<div class="container">
@foreach($article as $value)
@if($value->brouillon == 'on')
<h1 class="animated bounce">{{$value->title}}</h1>
<p>{{$value->text}} </p>
@endif

@endforeach
</div>






@endsection
