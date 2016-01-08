<?php 
session_start();
define ('USERNAME', 'admin');
define ('PASSWORD', 'admin');

if($_SERVER['REQUEST_METHOD']=='POST'){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username === USERNAME && $password === PASSWORD){
		$_SESSION['username'] = $username;
		header("location: index.php");
	}
}
 ?>

<html>
	<head>
		<title>Login Administrator</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="../css/login.css">
	</head>
	<body>
		 <div class="container">			
			<form method="POST" action="login.php">		
				<h3>Login Administrator</h3>
				<input type="text" name="username" class="form-control" placeholder="username" required autofocus>
				<input type="password" name="password" class="form-control" placeholder="Password" required>
				<br>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
			</form>
			</div>
	</body>
	  
	
</html>