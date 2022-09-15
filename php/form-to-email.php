<?php

  $name = $_POST['name'];
  $visitor_email = $_POST['mail'];
  $message = $_POST['message'];

  $email_from = 'andrearicci500@gmail.com';
  $email_subject = "New Portfolio mail";
  $email_body = "Message on portfolio from $name ($visitor_email).\n".
                            "Here is the message:\n $message".

  $to = "andrearicci500@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

 ?>