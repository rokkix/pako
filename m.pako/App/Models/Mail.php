<?php


namespace App\Models;

use App\Core\Mvc\Model;

class Mail extends Model {

    protected $to = 'contact@pako.by';
    protected $subject = "Ремонт квартир Pako.by";
    protected $type = "text/html";
    protected $encoding = "utf-8";
    protected $message;
    protected $user_name;
    protected $user_email;
    protected $user_phone;
   
    
    
    public function __construct() {
        
    }
    
    public function mailSend() {

        $formatMessage = '<p>'.$this->message.'</p> </br> <b>'.$this->user_phone.'</b> </br><i>'.$this->user_name.'</i> </br>';


            $from = "=?utf-8?B?".base64_encode($this->user_name)."?="." <".$this->user_email.">"; // Кодируем обратный адрес (во избежание проблем с кодировкой)
            $headers = "From: ".$from."\r\nReply-To: ".$from."\r\nContent-type: ".$this->type."; charset=".$this->encoding."\r\n"; // Устанавливаем необходимые заголовки письма

            $this->subject = "=?utf-8?B?".base64_encode($this->subject)."?="; // Кодируем тему (во избежание проблем с кодировкой)
            return mail($this->to, $this->subject, $formatMessage, $headers); // Отправляем письмо и возвращаем результат
        }


    
}