<?php
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
?>

<?php
	$email_from = 'yourname@yourwebsite.com';

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".
?>

<?php

  $to = "nzazula@umich.edu";

  $headers = "From: $visitor_email \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

 ?>
