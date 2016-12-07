<?php
if(isset($_POST['submit'])) {
$to = "nishan@hotmail.co.nz";
$subject = $_POST['subject'];
$name_field = $_POST['name'];
$email_field = $_POST['mail'];
$message = $_POST['message'];
$dropdown = $_POST['country'];
  
$body = "From: $name_field\n E-Mail: $email_field\n Message:\n $message\n country: $dropdown\n";
 
echo "Data has been submitted to $to!";
mail($to, $subject, $body);
} else {
echo "blarg!";
}
?>