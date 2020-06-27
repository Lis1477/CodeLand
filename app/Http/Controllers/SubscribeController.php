<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeRequest;
use App\Models\Subscribe;

class SubscribeController extends Controller
{
  public function postIndex(SubscribeRequest $r) {

  	$obj = new Subscribe;
  	$obj->name = $r['name'];
  	$obj->email = $r['email'];
  	$obj->save();

    $name = strip_tags(htmlspecialchars($r['name']));
    $mail = strip_tags(htmlspecialchars($r['email']));
    
    $title = 'Оформлена подписка';
    $body = "
<div>
  <p>Имя: <strong>$name</strong></p>
  <p>Email: <strong>$mail</strong></p>
</div>            
    ";
    $headers = array(
      'MIME-Version' => '1.0',
      'Content-type' => 'text/html; charset=utf-8',
      'From' => $name.' <'.$mail.'>'
    );

    $mailing = mail(env('MAIL_USERNAME'), $title, $body, $headers);

  	$note = "Вы подписаны!";

  	return redirect()->back()->with(['note' => $note, 'name' => $r['name']]);
  }
}
