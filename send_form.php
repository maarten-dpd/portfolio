<?php
// formulier data ophalen
$name = $_POST['naam'];
$email = $_POST['email'];
$skills = $_POST['selecteerSkills'];
$comments = $_POST['commentaarEnFeedback'];

// email aanmaken
$to = 'maartendp@gmail.com';
$subject = 'Contact Form portfolio';
$message = "Name: $name\n\n";
$message .= "Email: $email\n\n";
$message .= "Skills: $skills\n\n";
$message .= "Comments: $comments\n\n";
$headers = "From: $email\r\n" .
           "Reply-To: $email\r\n" .
           "X-Mailer: PHP/" . phpversion();

// email sturen
$mailSent = mail($to, $subject, $message, $headers);

// controle
if ($mailSent) {
  // Email verstuurd
  echo 'success';
  echo '<script>window.history.go(-1);</script>';
} else {
  // email niet verstuurd
  echo 'error';
}
?>
