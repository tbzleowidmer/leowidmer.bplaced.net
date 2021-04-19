<?php 
  session_start();
  session_destroy();
  header("refresh:2;../index.html");
  echo "Benutzer erfolgreich abgemeldet.";
?>




