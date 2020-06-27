@extends('layouts.base')


@section('content')

<article>
	<div class="contant-block">

		{!!isset(($obj->text)) ? $obj->text:''!!}

	</div>

</article>

@endsection