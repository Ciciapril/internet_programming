<?php 

define ('USERNAMEMEMBER', 'member');
define ('PASSWORDMEMBER', 'member');

if($_SERVER['REQUEST_METHOD']=='POST'){
  $username = $_POST['usernamemember'];
  $password = $_POST['passwordmember'];

  if ($username === USERNAMEMEMBER && $password === PASSWORDMEMBER){
    $_SESSION['usernamemember'] = $username;
    header("location: member/index.php");
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
  <div class="col-md-4">
  </div>
     <div class="col-md-4" align="center">      
      <form method="POST" action="index.php">   
        <h3>Login Member</h3>
        <input type="text" name="username" class="form-control" placeholder="username" required autofocus> <br>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" id="buttonmember" type="submit">Log in</button>
      </form>
      </div>
  <div class="col-md-4">
  </div>
  </body>
    
  
</html>