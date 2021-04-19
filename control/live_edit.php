<?php

define( 'MYSQL_HOST', '127.0.0.1' );
define( 'MYSQL_USER', 'leowidmer' );
define( 'MYSQL_PASS', 'm133' );
define( 'MYSQL_DB', 'leowidmer' );
define( 'MYSQL_PORT', 3306 );

$mysqli = new mysqli( MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_DB, MYSQL_PORT );

$user_id  = $_REQUEST['user_id'];
$email    = $_REQUEST['email'];
$short    = $_REQUEST['short'];
$usrgroup = $_REQUEST['usrgroup'];

if ($_REQUEST['action'] == 'edit') 
{	
  $sql = sprintf("UPDATE users SET email = '%s', short = '%s', usrgroup = '%s' WHERE user_id = %s" , $email , $short, $usrgroup , $user_id);

  $query = $mysqli->query($sql) or die($sql);
  
}
else if ($_REQUEST['action'] == 'delete')
{
  $sql = sprintf("DELETE FROM users WHERE user_id = %s" , $user_id);

  $query = $mysqli->query($sql) or die($sql);

  header("Refresh:0");
} 

?>