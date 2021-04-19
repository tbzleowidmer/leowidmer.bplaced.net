<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Registrieren</title> 
    <link rel="stylesheet" href="view/css/main.css">
  </head>

  <body>
    <div id="login">
      <div id="triangle"></div>
      <h1>Registrieren</h1>
      <form action="control/registriercheck.php" method="post">
        <input type="email" name="email" placeholder="Email" required/>
        <input type="password" name="password" placeholder="Passwort" minlength="8" required/>
        <input type="password" name="password2" placeholder="Passwort wiederholen" minlength="8" required/>
        <input type="submit" value="Registrieren" />
      </form>
    </div>
      <script src="view/js/index.js"></script>         
  </body>
</html>