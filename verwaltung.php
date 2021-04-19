<?php

session_start();

include( "view/header.php");
include( "control/views.php" );

$email = $_SESSION['email'];
$group = $_SESSION['usrgroup'];


if( $_SESSION['loggedIn'] == true )
{

  if( $group == "ADMIN" )
  {
    showAdminView( $email );
  }
  else
  {
    showDefaultView( $email );
  }

}
else
{
  header( "Location: anmeldung.php" );
}


?>