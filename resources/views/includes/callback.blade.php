<div class="modal closed" id="modal">
    <div class="modal-guts">
        <div class="modal-header">
            <p><img src="{{ asset('img/call_me_ico.png') }}" alt="call me icona"></p>
            <p>ЗАКАЖИТЕ ЗВОНОК!<br><span>Мы перезвоним в удобное время.</span></p>
            <p class="close_but" id="close-button"><img src="{{ asset('img/close_ico.png') }}" alt="close me" title="Закрыть окно"></p>
        </div>

        <div class="modal-form">
            <p class="modal-form_header">Выберите время и оставьте номер<br>телефона, мы вам перезвоним.</p>

            <form method="post" action="{{ asset('callback/form') }}">
                {!! csrf_field() !!}

                <div class="modal-form_call-time">
                    <div class="modal-form_day">
                        <div class="modal-form_date-ico"><img src="{{ asset('img/date_ico.png') }}"></div>
                        <select name="call_back_day">
                            <option selected>Сегодня</option>
                            <option>Завтра</option>
                        </select>
                    </div>
                    <div class="modal-form_time">
                        <select name="call_back_time">
                            <option selected>Сейчас</option>
                            <option>09:00-10:00</option>
                            <option>10:00-11:00</option>
                            <option>11:00-12:00</option>
                            <option>12:00-13:00</option>
                            <option>13:00-14:00</option>
                            <option>14:00-15:00</option>
                            <option>15:00-16:00</option>
                            <option>16:00-17:00</option>
                            <option>17:00-18:00</option>
                            <option>18:00-19:00</option>
                        </select>
                    </div>
                </div>

                <div class="modal-form_phone">
                    <div class="modal-form_phone-ico"><img src="{{ asset('img/phone_ico.png') }}"></div>
                    <input type="tel" name="call_back_tel" placeholder="@if($errors->first('call_back_tel')) {{ $errors->first('call_back_tel') }} @elseТелефон*@endif" title="Введите Телефон" value="{{ old('call_back_tel', '') }}" required>
                </div>

                <div class="modal-form_name">
                    <div class="modal-form_name-ico"><img src="{{ asset('img/name_ico.png') }}"></div>
                    <input type="text" name="call_back_name" placeholder="@if($errors->first('call_back_name')) {{ $errors->first('call_back_name') }} @elseИмя*@endif" title="Введите Имя" value="{{ old('call_back_name', '') }}" required>
                </div>

                <button type="submit" name="call_back_submit">ЖДУ ЗВОНКА</button>

            </form>

        </div>
    </div>
</div>

<div id="close-button2">
    <div class="modal-overlay closed" id="modal-overlay"></div>
</div>

<script>
var modal = document.querySelector("#modal");
var modalOverlay = document.querySelector("#modal-overlay");
var closeButton = document.querySelector("#close-button");
var closeButton2 = document.querySelector("#close-button2");
var openButton = document.querySelector("#open-button");

closeButton.addEventListener("click", function() {
  modal.classList.toggle("closed");
  modalOverlay.classList.toggle("closed");
});

closeButton2.addEventListener("click", function() {
  modal.classList.toggle("closed");
  modalOverlay.classList.toggle("closed");
});

openButton.addEventListener("click", function() {
  modal.classList.toggle("closed");
  modalOverlay.classList.toggle("closed");
});
</script>
