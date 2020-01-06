<?php
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent ="Fra: $firstname \n Email: $email \n Besked: $message";
$recipient ="lisabianca@me.com";
$subject ="contact form";
$mailheader = "Fra: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Tusind tak for din besked. Vi vender tilbage!";
?>


<style>
    div {
        text-decoration: none;
        font-family: sans-serif;
        font-size: 1.4rem;
        color: #CCC188;
    }

</style>
<br><br><br>
<a href="kontakt.html">
    <div>TILBAGE</div>
</a>
