<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>GetJobs</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/datepicker.css">
	 <script src="js/bootstrap.js"></script>
	    <script src="js/jquery.js"></script>

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	 <style>
		.datepicker{z-index:1151;}
	    </style>
	    <script>
		$(function(){
		    $("#tanggal").datepicker({
			format:'yyyy/dd/mm'
		    });
                });
	    </script>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">GetJobs</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#lowongan">Semua Lowongan</a>
                    </li>
					 <li class="page-scroll">
                        <a href="#jobfair">Info Jobfair</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#login">Masuk?</a>
                    </li>
                    
                </ul>
				
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
		   <?php
		   include'header.php';
		   include'lowongan.php';
		   ?>
	 
		
		<section class="success" id="jobfair">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Info Jobfair</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
               <table class="table table-condensed">
  …			<tr>
				<td align = "center"> <img src="img/1.jpg"  width="500" height="250">
				</td>
				<td align = "center"> <img src="img/2.jpg"  width="500" height="250">
				</td>
			</tr>
			<tr>
				<td align = "center"> <img src="img/3.jpg"  width="500" height="250">
				</td>
				<td align = "center"> <img src="img/4.jpg"  width="500" height="250">
				</td>
			</tr>
			
	</table>
		<nav>
		  <ul class="pager">
			<li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
			<li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
		  </ul>
		</nav>
            </div>
        </div>
    </section>
	
	 <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          
                    </div>      
	  <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Pendaftaran</h2>
                            <hr class="star-primary">
									<div class="row">
										<div class="col-lg-12">
											<form method="post" action="" enctype="multipart/form-data">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
			<input type="text" class="form-control"  placeholder="Nama">
		  </div>
		  <div class="form-group">
			
			<input type="text" class="form-control" id="alamat" placeholder="Alamat">
		  </div>
		  <div class="form-group">
			
			<input type="email" class="form-control" id="email" placeholder="Email">
		  </div>
		  <div class="form-group">
			
			<input type="password" class="form-control" id="sandi" placeholder="Sandi">
		  </div>
		  
			 <div class="modal-body">
                        <label>Tanggal</label>
                        <input type="text" id="tanggal">
                    </div>
						<input type="radio" name="Kelamin" value="L">Laki Laki
						<input type="radio" name="Kelamin" value="P">Perempuan
						<br>
													</div>
	<div class="col-md-6">
		<label>Pendidikan Terakhir</label>
		<select name="Pendidikan">
		<option>-Pendidikan-</option>
		<option value="1">SMA</option>
		<option value="2">D1</option>
		<option value="2">D2</option>
		<option value="2">D3</option>
		<option value="3">S1</option>
		<option value="2">S2</option>
		<option value="2">S3</option>
		</select><br>
		<label>Jurusan</label>
		
		<input type="text" Name="jurusan" size="20" placeholder="Jurusan"><br> 
	</div>
	   	<div class="clearfix"></div>
			<div>
				<input type="submit" name="btn" value="Daftar" class="btn btn-default">
			</div>
		</div>
	</form>
		</div>
		</div>
	</div>
     </div>
                    </div>
                </div>
            </div>
        </div>

	
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
					<form class="form-horizontal">
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
					  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					</div>
				  </div>
			  <div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
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
				
					<h5>Login Perusahaan </h5>
				<form class="form-horizontal">
			  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
				  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
				</div>
			  </div>
			  <div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
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
		</body>

    </section>

    <?php
	include 'footer.php';
	?>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

   
          

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
	 <script src="js/bootstrap-modal.js"></script>
            <script src="js/bootstrap-transition.js"></script>
            <script src="js/bootstrap-datepicker.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>
