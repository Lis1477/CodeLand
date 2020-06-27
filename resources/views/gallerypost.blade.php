@extends('layouts.base')

@section('content')
<link rel='stylesheet prefetch' href='/public/css/jquery.fancybox.css'>

<article class="portfolio-text">
	<div class="contant-block">
		<h1>{{$obj_2->name}}</h1>
		{!!$obj_2->text!!}
	</div>
</article>

<script src='/public/js/jquery.fancybox.js'></script>
<script>
$(function() {
$("[data-fancybox]").fancybox({loop:true});
});
</script>
@endsection