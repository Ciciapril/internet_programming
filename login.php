<?php 

define ('USERNAMEMEMBER', 'member');
define ('PASSWORDMEMBER', 'member');

if($_SERVER['REQUEST_METHOD']=='POST'){
	$username = $_POST['usernamemember'];
	$password = $_POST['passwordmember'];

	if ($username === USERNAMEMEMBER && $password === PASSWORDMEMBER){
		$_SESSION['usernamemember'] = $username;
		header("location: ../member/index.php");
	}

}
 ?>

		<section class="success" id="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Login</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
				<div class="row">
					<h5 align="center"> Belum punya Akun?</h5> <div><p><center>
					<a href="#portfolioModal2" data-toggle="modal" class="btn btn-lg btn-outline">DAFTAR</a></center></p></div>
				</div>
                <div class="col-lg-4 col-lg-offset-2">
					<h5> Login Member </h5>
					<form class="form-horizontal" method="POST" action="index.php">	
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="usernamemember" name="usernamemember" placeholder="Username">
					</div>
				  </div>
			  <div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" id="passwordmember" name="passwordmember" placeholder="Password">
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <div class="checkbox">
					<label>
					  <input type="checkbox"> Remember me
					</label>
				  </div>
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" class="btn btn-default">Sign in</button>
				</div>
			  </div>
			</form>
                </div>
                <div class="col-lg-4">


           	<?php 

			define ('USERNAMEPERUSAHAAN', 'enterprise');
			define ('PASSWORDPERUSAHAAN', 'enterprise');

			if($_SERVER['REQUEST_METHOD']=='POST'){
				$username = $_POST['usernameperusahaan'];
				$password = $_POST['passwordperusahaan'];

				if ($username === USERNAMEPERUSAHAAN && $password === PASSWORDPERUSAHAAN){
					$_SESSION['usernameperusahaan'] = $username;
					header("location: ../perusahaan/index.php");
				}

				}
 			?>
				
					<h5>Login Perusahaan </h5>
				<form class="form-horizontal">
			  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="usernameperusahaan" placeholder="Username">
				</div>
			  </div>
			  <div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" id="passwordperusahaan" placeholder="Password">
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <div class="checkbox">
					<label>
					  <input type="checkbox"> Remember me
					</label>
				  </div>
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" class="btn btn-default">Sign in</button>
				</div>
			  </div>
			</form>
                    
                </div>
                
            </div>
					
                
                </div>
            </div>
        </div>
    </section>