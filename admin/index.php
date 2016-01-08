<?php 
session_start();
if(!isset($_SESSION['username'])){
	header("location: login.php");
	exit;
}
 ?>

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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>

    <!-- Custom CSS -->
    <link href="../css/freelancer.css" rel="stylesheet">

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

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
   <?php 
	include 'navadmin.php';
	include 'headeradmin.php';
	include 'lowonganadmin.php';
	include 'jobfairlowongan.php';
	include 'memberadmin.php';
	include '../PDO/index.php';
    include 'perusahaan.php';
    ?>

    
   
	
	 

		
	 
		
		
	 

		
		
			
			
	
			
			
			
	 <div class="portfolio-modal modal fade" id="tambahperusahaan" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h2>Tambah Perusahaan</h2>
                            <hr class="star-primary">
									<div class="row">
										<div class="col-lg-12">
											<form method="post" action="" enctype="multipart/form-data">
												<div class="row">
				<div class="col-md-12">
		  <div class="form-group">
			<input type="text" class="form-control"  placeholder="Nama Perusahaan">
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
			<br>
	
		 </div>
	    
													<div class="clearfix"></div>
													<div>
														<input type="submit" name="btn" value="Tambah" class="btn btn-default">
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

			
		

    <!-- Footer -->
   <?php
   include '../footer.php'
   ?>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

   
          

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../js/classie.js"></script>
    <script src="../js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/freelancer.js"></script>

    <script type="text/javascript" src="../js/jquery.js"></script>

</body>

</html>
