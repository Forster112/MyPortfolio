<?php
// visitors details
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

// recipient details
  $mailTo = 'forstermichael112@gmail.com';

// email body
  $emailBody = '<p> <b>Visitors name: </b>' .$name . '</p>'
  '<p> <b>Email: </b>' .$email . '</p>'
  '<p>' .$message . '</p>';

// header for sender info
  $headers = "From: " .$name . "<". $email . ">" ;
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

  $result = mail($mailTo, $subject, $emailBody, $headers);

  //error checking
  if($result){
    echo "The message was sent successfully!";
  } else {
    echo "Error: Message not sent, Try again later"
  }
?>