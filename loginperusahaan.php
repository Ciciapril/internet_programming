<?php 
session_start();
define ('USERNAMEperusahaan', 'perusahaan');
define ('PASSWORDperusahaan', 'perusahaan');

if($_SERVER['REQUEST_METHOD']=='POST'){
  $usernameperusahaan = $_POST['usernameperusahaan'];
  $passwordperusahaan = $_POST['passwordperusahaan'];

  if ($usernameperusahaan === USERNAMEperusahaan && $passwordperusahaan === PASSWORDperusahaan){
    $_SESSION['usernameperusahaan'] = $usernameperusahaan;
    header("location: index.php");
  }
}
 ?>

<html>
  <head>
    <title>Login perusahaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
  </head>
  <body>
     <div class="container">      
      <form method="POST" action="loginperusahaan.php">   
        <h3>Login perusahaan</h3>
        <input type="text" name="usernameperusahaan" class="form-control" placeholder="usernameperusahaan" required autofocus>
        <input type="password" name="passwordperusahaan" class="form-control" placeholder="Passwordperusahaan" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
      </form>
      </div>
  </body>
    
  
</html>