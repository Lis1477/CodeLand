<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;

class ContactFormController extends Controller
{
    public function postIndex(ContactFormRequest $r) {

        $name = strip_tags(htmlspecialchars($r['cont_name']));
        $phone = strip_tags(htmlspecialchars($r['cont_phone']));
        $mail = strip_tags(htmlspecialchars($r['cont_mail']));
        $txt = strip_tags(htmlspecialchars($r['cont_txt']));

        $title = 'Сообщение из формы обратной связи';
        $body = "
<div>
    <p>Имя: <strong>$name</strong></p>
    <p>Телефон: <strong>$phone</strong></p>
    <p>Email: <strong>$mail</strong></p>
    <p>Сообщение:<br>
        <strong>$txt</strong>
    </p>
</div>            
        ";
        $headers = array(
          'MIME-Version' => '1.0',
          'Content-type' => 'text/html; charset=utf-8',
          'From' => $name.' <'.$mail.'>'
        );

        $mailing = mail(env('MAIL_USERNAME'), $title, $body, $headers);

   		if($mailing) $note = "Ваше сообщение отправлено!<br><br>Мы ответим в ближайшее время.";
            else $note = "Упс... Что-то пошло не так!<br><br>Попробуйте еще раз.";

   		return redirect()->back()->with(['note' => $note, 'name' => $name]);
    }
}
