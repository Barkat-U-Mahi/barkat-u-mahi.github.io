<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $receiving_email_address = 'barkatullah@trendobytes.com';

  // Include the PHP Email Form Library
  require_once('../assets/vendor/php-email-form/php-email-form.php');

  $contact = new PHP_Email_Form();
  $contact->ajax = true;

  // Set email details
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Add message content
  $contact->add_message($_POST['name'], 'Name');
  $contact->add_message($_POST['email'], 'Email');
  $contact->add_message($_POST['message'], 'Message');

  // Send the email
  if ($contact->send()) {
    echo "success";
  } else {
    echo "error";
  }
}
?>
