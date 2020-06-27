@extends('layouts.base')

@section('content')
<article class="portfolio-text">
	<div class="contant-block">
		<h1>{{isset(($obj_1->name)) ? $obj_1->name:''}}</h1>

    <div class="portfolio-preview">
    @foreach($gal as $item)
      <a href="/portfolio/{{$item->alias}}" class="portfolio-preview_element" title="Жми, чтобы узнать подробности!">
        <div class="portfolio-preview_block">
          <div class="portfolio-preview_block-skale">
            <img src="/public/img/{{$item->pic}}" alt="{{$item->name}}">
          </div>
        </div>
        <div class="portfolio-preview_block-txt">
          <p>{{$item->name}}</p>
        </div>
      </a>
      @endforeach
      
    </div>



	</div>
</article>
@endsection