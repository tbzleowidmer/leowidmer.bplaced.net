<?php

function sendMail($name_user,$lastname_user,$email_user,$message) 
{
  $email_owner = "leo.widmer@edu.tbz.ch";
  
  $maildomain = "leowidmer.bplaced.net";

  $subject_owner = "Nachricht von " . $maildomain;

  $subject_user = "Vielen Dank für Ihre Nachricht an " . $maildomain;

  $mailtext_owner = sprintf("<p>Folgende Nachricht kommt vom Kontaktformular der Website %s: <br><br>Nachricht: %s <br><br>From: %s </p>", $maildomain,$message,$email_user);

  $mailtext_user = sprintf("<p> Folgende Angaben hast du mir gemacht: <br> Vorname: %s <br> Nachname: %s <br> Email: %s <br> Nachricht: %s  </p>", $name_user,$lastname_user,$email_user,$message);

  $headers = "Content-Type: text/html; charset=utf-8";

  //Mail an Betreiber der Website
  $isSent = @mail($email_owner, $subject_owner, $mailtext_owner, $headers);
  
  //Mail an Benutzer/Besucher der Website
  if ($isSent)
  {
    $isSent = mail($email_user, $subject_user, $mailtext_user , $headers);
    return true;
  }
  else
  {
    return false;
  }
}
?>