@extends('layouts.base')

@section('content')
<article>
	<div class="contant-block uslugi">
		<h1>{{isset(($obj_1->name)) ? $obj_1->name:''}}</h1>
    @foreach($srv as $service)
    <div class="services-element">
      <div class="services-element_img">
        <img src="/public/img/{{$service->pic}}" alt="{{$service->name}}" title="{{$service->name}}">
      </div>
      <div class="services-element_txt">
          <h2><a href="/{{$obj_1->alias}}/{{$service->alias}}" title="Подробнее о {{$service->name}}">{{$service->name}}</a></h2>
          {!!$service->pre_text!!}
          <a href="/{{$obj_1->alias}}/{{$service->alias}}" class="services-element_more-link" title="Подробнее о {{$service->name}}">подробнее --></a>
      </div>
    </div>
      @endforeach
	</div>
</article>
@endsection