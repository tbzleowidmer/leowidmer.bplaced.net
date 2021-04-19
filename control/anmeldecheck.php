<?php 
  
  session_start();

  define( 'MYSQL_HOST', '127.0.0.1' );
  define( 'MYSQL_USER', 'leowidmer' );
  define( 'MYSQL_PASS', 'm133' );
  define( 'MYSQL_DB', 'leowidmer' );
  define( 'MYSQL_PORT', 3306 );

  $mysqli = new mysqli( MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_DB, MYSQL_PORT );

  $email    = htmlspecialchars($_REQUEST['email']);
  $pw       = htmlspecialchars($_REQUEST['password']);


  if ((strlen($email)>0) and (strlen($pw)>0))
  {
    $hash = hash('sha256',$pw);

    $sql = sprintf("SELECT * FROM users WHERE email='%s' AND pw='%s'",$email, $hash);

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0)
    {

      while ($row = $result->fetch_assoc())
      {
        $_SESSION['email']     = $row['email'];
        $_SESSION['usrgroup']  = $row['usrgroup'];      
      }

      $_SESSION['loggedIn'] = true;

      header("Location: ../verwaltung.php");
    }
    else
    {
      echo '<p>Email oder Passwort falsch &#x3A;&#x28; </p>';
    }
  }
  else
  {
    echo '<p> Login fehlgeschlagen.</p>';
    echo '<p> Bitte versuchen sie es später erneut</p>'	;
  }




?>



