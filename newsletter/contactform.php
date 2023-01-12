<?php

if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $mailFrom = $_POST['mail'];

  $mailTo="info@jasdevelops.com";
  $headers="From: ".$mailFrom;

  $txt = "You have recevied an e-mail from ".$name.".\n\n".$mail;

mail($mailTo,$headers,$text);
header("Location: index.php?mailsend");

}