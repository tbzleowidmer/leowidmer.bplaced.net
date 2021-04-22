<?php

define( 'MYSQL_HOST', '127.0.0.1' );
define( 'MYSQL_USER', 'leowidmer' );
define( 'MYSQL_PASS', 'm133' );
define( 'MYSQL_DB', 'leowidmer' );
define( 'MYSQL_PORT', 3306 );


function showAdminView( $email )
{
  $mysqli = new mysqli( MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_DB, MYSQL_PORT );

  $sql = "SELECT user_id,email,short,usrgroup FROM users";

  $result = $mysqli->query($sql);

  $html[] ='<h1> Willkommen ' . $email . '</h1>';
  $html[] ='<h2> Admin View </h2>';
  $html[] ='<a href="control/abmeldung.php" class="button scrolly" style ="position:absolute;right:2px;top:2px;">Logout</a>';
  $html[] ='<a href="registrieren.php" class="button scrolly" style ="position:absolute;right:185px;top:2px;">Add User</a>';
  $html[] ='  <table id="data_table">';
  $html[] ='    <thead>';
  $html[] ='      <tr>';
  $html[] ='        <th>ID: </th>';
  $html[] ='        <th>E-Mail: </th>';
  $html[] ='        <th>Kürzel: </th>';
  $html[] ='        <th>Gruppe: </th>';
  $html[] ='       </tr>';
  $html[] ='    </thead>';
  $html[] ='    <tbody>';

  while ($row = $result->fetch_assoc()) {
    $user_id    = $row['user_id'];
    $user_email = $row['email'];
    $user_short = $row['short'];
    $user_group = $row['usrgroup'];
 


    $html[] ='      <tr>';
    $html[] ='        <td>'.$user_id.'</td> '; 
    $html[] ='        <td>'.$user_email.'</td>';
    $html[] ='        <td>'.$user_short.'</td>';
    $html[] ='        <td>'.$user_group.'</td>';
    $html[] ='      </tr>';     
  }

  $html[] ='    </tbody>';
  $html[] ='  </table>';
  $html[] ='</body>';
  echo implode("\n", $html);
}

function showDefaultView( $email )
{

  $mysqli = new mysqli( MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_DB, MYSQL_PORT );

  $sql = "SELECT user_id,email,short,usrgroup FROM users";

  $result = $mysqli->query($sql);

  $html[] ='<h1> Wilkommen ' . $email . '</h1>';
  $html[] ='<h2> User View </h2>';
  $html[] ='<a href="control/abmeldung.php" class="button scrolly" style ="position:absolute;right:2px;top:2px;">Logout</a>';
  $html[] ='<table>';
  $html[] =' <tr>';
  $html[] ='   <th>ID: </th>';
  $html[] ='   <th>E-Mail: </th>';
  $html[] ='   <th>Kürzel: </th>';
  $html[] ='   <th>Gruppe: </th>';
  $html[] =' </tr>';

  while ($row = $result->fetch_assoc()) {
    $user_id    = $row['user_id'];
    $user_email = $row['email'];
    $user_short = $row['short'];
    $user_group = $row['usrgroup'];
 


    $html[] =' <tr>';
    $html[] ='   <td>'.$user_id.'</td> '; 
    $html[] ='   <td>'.$user_email.'</td>';
    $html[] ='   <td>'.$user_short.'</td>';
    $html[] ='   <td>'.$user_group.'</td>';
    $html[] =' </tr>';     
  }

  $html[] ='</table>';
  $html[] ='</body>';

  echo implode("\n", $html);

}

?>