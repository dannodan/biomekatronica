<?php
  $to = "biomekatronica.ve@gmail.com";
  $subject = "HTML email";

  $message = "
  <html>
  <head>
  <title>HTML email</title>
  </head>
  <body>
  <p>".$_POST['message']."</p>
  </body>
  </html>";

  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= 'From: '.$_POST['name'].' <'.$_POST['email']. ">\r\n";

  mail($to,$subject,$message,$headers);
?>