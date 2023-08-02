<?php
class PHP_Email_Form {
  public $to;
  public $from_name;
  public $from_email;
  public $subject;
  public $message;
  public $ajax = false;

  public function send() {
    $headers = "From: {$this->from_name} <{$this->from_email}>\r\n";
    $headers .= "Reply-To: {$this->from_email}\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    return mail($this->to, $this->subject, $this->message, $headers);
  }

  public function add_message($value, $label) {
    $this->message .= "<p><strong>{$label}:</strong> {$value}</p>";
  }
}
?>
