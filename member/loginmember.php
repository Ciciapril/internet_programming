<?php 
session_start();
define ('USERNAMEMEMBER', 'member');
define ('PASSWORDMEMBER', 'member');

if($_SERVER['REQUEST_METHOD']=='POST'){
  $usernamemember = $_POST['usernamemember'];
  $passwordmember = $_POST['passwordmember'];

  if ($usernamemember === USERNAMEMEMBER && $passwordmember === PASSWORDMEMBER){
    $_SESSION['usernamemember'] = $usernamemember;
    header("location: index.php");
  }
}
 ?>

<html>
  <head>
    <title>Login Member</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
  </head>
  <body>
   <div class="col-md-4" align="center">   
   </div>
     <div class="container">    
      <div class="col-md-4" align="center">     
      <form method="POST" action="loginmember.php">   
        <h3>Login Member</h3>
        <input type="text" name="usernamemember" class="form-control" placeholder="usernamemember" required autofocus>
        <input type="password" name="passwordmember" class="form-control" placeholder="Passwordmember" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
      </form>
      </div>
       <div class="col-md-4" align="center">   </div>
  </body>
    
  
</html>