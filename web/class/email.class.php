<?php

class Email {
var $to;
var $to_name;
var $from;
var $from_name;
var $subject;
var $htmlbody;
var $sendBuyer;

public function to($to , $name = null) {
$this -> to = implode(',',$to);
$this -> to_name = $name;
return $this;
}
public function from($from, $name = null) {
$this -> from = $from;
$this -> from_name = $name;
return $this;
}

public function subject($subject) {
$this -> subject = $subject;
return $this;
}

public function message($msg) {
$this -> htmlbody = $msg;
return $this;
}
public function sendBuyer()
    {

$this->data['html']="Hello,
Congratulation!!
You have been send your important feed back.";

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $headers .= 'To:' . $this -> to_name . '<' . $this -> to . '>' . "\r\n";
        $headers .= 'From:' . $this -> from_name . '<' . $this -> from . '>' . "\r\n";

        if (mail($this -> from, $this->from_name, $this->data['html'], $headers)) {
           return true;
        } else {
            return false;
        }
    }

public function send() {
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= 'To:' . $this -> to_name . '<' . $this -> to . '>' . "\r\n";
$headers .= 'From:' . $this -> from_name . '<' . $this -> from . '>' . "\r\n";

if (mail($this -> to, $this -> subject, $this -> htmlbody, $headers)) {
    $msgSend = "Your messege has been send successfully";
    return $msgSend;
} else {
return false;
}
}

}