@extends('layouts.base')

@section('content')
<article>
	<div class="contant-block">
		<h1 class="kontakti_header">{{isset(($obj_1->name)) ? $obj_1->name:''}}</h1>

    <div class="kontakti">
      <div class="kontakti_info-bl">
        <p>Индивидуальный Предприниматель<br>
        <strong>Лискович Александр Николаевич</strong></p>
        <p>Свидетельство <strong>300128939,<br>
        выдано Витебским Облисполкомом,<br>
        решением 605 от 30.12.1996.</strong></p>
        <p>Связь:<br>
          <a href="tel:+375296519149" class="kontakti_link"><span class="kontakti_prefix">+375 29</span> 651 91 49 <span class="kontakti_prefix">(A1)</span></a><br>
          <a href="tel:+375336495011" class="kontakti_link"><span class="kontakti_prefix">+375 33</span> 649 50 11 <span class="kontakti_prefix">(МТС)</span></a><br>
          <a href="viber:+375296519149" class="kontakti_link"><span class="kontakti_prefix">+375 29</span> 651 91 49 <span class="kontakti_prefix">(Viber)</span></a><br>
          <a href="whatsapp:+375296519149" class="kontakti_link"><span class="kontakti_prefix">+375 29</span> 651 91 49 <span class="kontakti_prefix">(WhatsApp)</span></a><br>
          <a href="skype:Lis1477" class="kontakti_link">Lis1477 <span class="kontakti_prefix">(Skype)</span></a>
        </p>
      </div>

      <div class="kontakti_form-bl">
        <p>Напишите мне:</p>
        <form method="post" action="{{ asset('kontakti/form') }}">
          {!!csrf_field()!!}

          <input type="text" name="cont_name" placeholder="Ваше имя:" value="{{ old('cont_name', '') }}">

          <input type="text" name="cont_phone" placeholder="Ваш телефон:" value="{{ old('cont_phone', '') }}">

          @error('cont_mail')
          <div class="form_error_string">{!! $message !!}</div> 
          @enderror
          <input type="email" name="cont_mail" placeholder="Ваш email:*" value="{{ old('cont_mail', '') }}" required>

          @error('cont_txt')
          <div class="form_error_string">{!! $message !!}</div> 
          @enderror
          <textarea name="cont_txt" placeholder="Ваше сообщение:*" maxlength="3000" required>{{ old('cont_txt', '') }}</textarea>

          <button type="submit" name="cont_submit">Отправить</button>

        </form>
      </div>
    </div>
	</div>
</article>
@endsection