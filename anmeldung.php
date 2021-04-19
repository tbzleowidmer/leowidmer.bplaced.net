<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title> 
    <link rel="stylesheet" href="view/css/main.css">
  </head>

  <body>
    <div id="login">
      <div id="triangle"></div>
      <h1>Log in</h1>
      <form action="control/anmeldecheck.php" method="post">
        <input type="email" name="email" placeholder="Email" required/>
        <input type="password" name="password" placeholder="Password" required/>
        <input type="submit" value="Log in" />
      </form>
      <a href="registrieren.php" class="button scrolly">Registrieren</a>
    </div>
      <script src="view/js/index.js"></script>         
  </body>
</html>