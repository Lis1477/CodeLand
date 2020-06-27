@extends('layouts.base')


@section('content')

<article>
	<div class="contant-block">
		<h1>{{isset(($obj_1->name)) ? $obj_1->name:''}}</h1>

	</div>
</article>


@endsection