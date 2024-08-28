<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'wilfredocarillo023@gmail.com'; // replace with your Gmail address
  $subject = 'New Contact from Enquiry';
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  $headers = 'From: ' . $email . "\r\n" .
             'Reply-To: ' . $email . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $body, $headers);

  echo 'Email sent successfully!';
?>