<?php

define( 'MYSQL_HOST', '127.0.0.1' );
define( 'MYSQL_USER', 'leowidmer' );
define( 'MYSQL_PASS', 'm133' );
define( 'MYSQL_DB', 'leowidmer' );
define( 'MYSQL_PORT', 3306 );

$mysqli = new mysqli( MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_DB, MYSQL_PORT );

$email    = htmlspecialchars($_REQUEST['email']);
$pw       = htmlspecialchars($_REQUEST['password']);
$pw2      = htmlspecialchars($_REQUEST['password2']);

if($pw == $pw2)
{

  $sql_select = sprintf("SELECT * FROM users WHERE email='%s'" , $email);

  $result = $mysqli->query($sql_select);
 
  if ($result->num_rows > 0)
  {
    header("refresh:5;../anmeldung.php");
    echo '<p> Diese Email wird bereits verwendet! </p>';
    echo '<p> Sie sollten sich lieber <a href="../anmeldung.php">anmelden</a></p>';
    
    
  }
  else
  {
    $hash = hash('sha256',$pw);

    $sql_insert = sprintf("INSERT INTO users (user_id,email,pw,short,usrgroup) VALUES (NULL,'%s','%s','NEU','USER')", $email, $hash);
  
    if ($mysqli->query($sql_insert))
    {
      header("refresh:2;../anmeldung.php");
      echo '<p> Ihr Benutzer wurde erstellt! </p>';
      
  
    }
    else
    {
      echo $sql;
    }
  }




}
else
{
  header("refresh:3;../registrieren.php");
  echo '<p> Die angegebenen Passwörter stimmen nicht überein </p>';
  

}
?>