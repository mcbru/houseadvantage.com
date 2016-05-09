<?php

/*
if(isset($_POST['submitted'])) {
  if(trim($_POST['contact_name']) === '') {
    $nameError = 'Please enter your name.';
    $hasError = true;
  } else {
    $name = trim($_POST['contact_name']);
  }

  if(trim($_POST['contact_email']) === '')  {
    $emailError = 'Please enter an email address.';
    $hasError = true;
  } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['contact_email']))) {
    $emailError = 'You entered an invalid email address.';
    $hasError = true;
  } else {
    $email = trim($_POST['contact_email']);
  }

  if(trim($_POST['contact_message']) === '') {
    $messageError = 'Please enter a message for us.';
    $hasError = true;
  } else {
    if(function_exists('stripslashes')) {
      $message = stripslashes(trim($_POST['contact_message']));
    } else {
      $message = trim($_POST['contact_message']);
    }
  }

  if(!isset($hasError)) {
    $emailTo = get_option('tz_email');
    if (!isset($emailTo) || ($emailTo == '') ){
      $emailTo = get_option('admin_email');
    }
    $subject = '[PHP Snippets] From '.$name;
    $body = "Name: $name \n\nEmail: $email \n\nMessage: $message";
    $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

    if (wp_mail($emailTo, $subject, $body, $headers)) {
      $emailSent = true;
      echo 'EMAIL SENT!';
    }
  }

}
 */

  // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["contact_name"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $subject = strip_tags(trim($_POST["contact_subject"]));
        $email = filter_var(trim($_POST["contact_email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["contact_message"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo $email;
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "sam@mcbru.com";

        // Set the email subject.
        // $subject = "New contact from $name";

        // Build the email content.
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Message:\n$message\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }
?>
