<?php

include("control/mail.php");

$vorname    = htmlspecialchars($_REQUEST['vorname']);
$nachname   = htmlspecialchars($_REQUEST['nachname']);
$email      = htmlspecialchars($_REQUEST['email']);
$message    = htmlspecialchars($_REQUEST['message']);
$botcheck   = htmlspecialchars($_REQUEST['botcheck']);


if ($botcheck == 14)
{
  if (sendMail($vorname,$nachname,$email,$message))
  {
    header("refresh:5;index.html");
    echo "<p> Ihre Nachricht wurde verschickt</p>";
    echo '<p>Sie werden in 5 Sekunden zur Hauptseite weitergeleitet</p>';
  }
  else
  {
    header("refresh:5;index.html");
    echo "<p> Ihre Nachricht konnte nicht verschickt werden</p>";
    echo '<p>Sie werden in 5 Sekunden zur Hauptseite weitergeleitet</p>';
  }
}
else
{
  header("refresh:5;index.html");
  echo '<strong><p>Botcheck fehlgeschlagen</p></strong>' . "\n";
  echo '<p>Sie werden in 5 Sekunden zur Hauptseite weitergeleitet</p>' . "\n";
}
?>