@extends('layouts.base')

@section('content')
<article>
	<div class="contant-block">
		<h1>{{isset(($obj_2->name)) ? $obj_2->name:''}}</h1>
		<div class="article_main-pic"><img src="{{ asset('img/'.$obj_2->pic) }}" alt="{{$obj_2->name}}" title="{{$obj_2->name}}"></div>
		{!!isset(($obj_2->text)) ? $obj_2->text:''!!}
		<p class="article_last-bl"> </p>
	</div>
</article>
@endsection