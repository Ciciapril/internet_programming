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
                        <a href="#member">Member</a>
                    </li>
					<li class="page-scroll">
                        <a href="#perusahaan">Perusahaan</a>
                    </li>
                    
                </ul>
				  <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> 
                  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                  Admin <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  
                  <li><a href="#">
                    <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                    Logout</a></li>                  
                </ul>
              </li>
            </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="../img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">GetJobs</span>
                        <hr class="star-light">
                        <span class="skills">GetJobs Membantu anda menemukan pekerjaan impian!</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
	
	 <div class="portfolio-modal modal fade" id="tambahlowongan" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h2>Tambah Lowongan</h2>
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
			
			<input type="text" class="form-control" id="bagian" placeholder="Bagian">
		  </div>
		   <div class="form-group">
			
			<input type="text" class="form-control" id="detil" placeholder="Detil Lowongan">
		  </div>
		 
			<br>
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
		</div>

		
	 <section class="success" id="lowongan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Semua Lowongan</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row" font="Arial">
			<a href="#tambahlowongan" data-toggle="modal" class="btn btn-lg btn-outline">Tambah Lowongan</a></center></p></div>
                <table class="table table-condensed">
	  …			 <tr>
					<th>No</th>
					<th>Perusahaan</th>
					<th>Bagian </th>
					<th>Detil Lowongan</th>
					<th>Aksi</th>
				</tr>
				<tr>
					<td>1</td>
					<td>PT ABCD</td>
					<td>Administrasi</td>
					<td>kualifikasi : jdfndjbfjdbfjdfjd<br>bfjdnejdjbjfbdjfb<br>
					jdbfjdbcjbdjcbj<br>dbjdjcbjdbcjdbjcbdjbcjdbcjjb</td>
					<td><button type="button" class="btn btn-warning">Edit</button> <button type="button" class="btn btn-danger">Hapus</button> </td>
				<tr>
					<td>2</td>
					<td>PT CITRA BUANA TEKNOLOGI</td>
					<td>Programmer</td>
					<td>kualifikasi : jdfndjbfjdbfjdfjd<br>bfjdnejdjbjfbdjfb<br>
					jdbfjdbcjbdjcbj<br>dbjdjcbjdbcjdbjcbdjbcjdbcjjb</td>
					<td><button type="button" class="btn btn-warning">Edit</button> <button type="button" class="btn btn-danger">Hapus</button> </td>
				
			</tr>
			<tr>
				<td>3</td>
				<td>CV BRAMASTHA ABIMANA</td>
				<td>HRD</td>
				<td>kualifikasi : jdfndjbfjdbfjdfjd<br>bfjdnejdjbjfbdjfb<br>
				jdbfjdbcjbdjcbj<br>dbjdjcbjdbcjdbjcbdjbcjdbcjjb</td>
				<td><button type="button" class="btn btn-warning">Edit</button> <button type="button" class="btn btn-danger">Hapus</button> </td>
			
			</tr>
			<tr>
				<td>4</td>
				<td>CV BRAMASTHA ABIMANA</td>
				<td>HRD</td>
				<td>kualifikasi : jdfndjbfjdbfjdfjd<br>bfjdnejdjbjfbdjfb<br>
				jdbfjdbcjbdjcbj<br>dbjdjcbjdbcjdbjcbdjbcjdbcjjb</td>
				<td><button type="button" class="btn btn-warning">Edit</button> <button type="button" class="btn btn-danger">Hapus</button> </td>
			
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
			</div>
		</section>
		
		
	  <div class="portfolio-modal modal fade" id="tambahinfo" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h2>Tambah Info JobFair</h2>
                            <hr class="star-primary">
									<div class="row">
										<div class="col-lg-12">
											<form method="post" action="" enctype="multipart/form-data">
												<div class="row">
													<div class="col-md-12">
														
														<div class="form-group">
															<input type="file" placeholder="Lamaran" id="name" name="sca" ">
															<p class="help-block text-danger"></p>
														</div>
				<br>
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
		</div>

		
		<section class="success" id="jobfair">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Info Jobfair</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
				<a href="#tambahinfo" data-toggle="modal" class="btn btn-lg btn-outline">Tambah Info</a></center></p></div>
			<table class="table table-condensed"">
  …			<tr>
				<td align = "center"> <img src="../img/1.jpg" class="img-responsive" width="500" height="250"> <br> <button type="button" class="btn btn-warning">Edit</button> <button type="button" class="btn btn-danger">Hapus</button> 
				</td>
				<td align = "center"> <img src="../img/2.jpg"  width="500" height="250"> <br> <button type="button" class="btn btn-warning">Edit</button> <button type="button" class="btn btn-danger">Hapus</button> 
				</td>
				<td> </td>
			</tr>
			<tr>
				<td align = "center"> <img src="../img/3.jpg"  width="500" height="250"> <br> <button type="button" class="btn btn-warning">Edit</button> <button type="button" class="btn btn-danger">Hapus</button>
				</td>
				<td align = "center"> <img src="../img/4.jpg"  width="500" height="250"> <br> <button type="button" class="btn btn-warning">Edit</button> <button type="button" class="btn btn-danger">Hapus</button>
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
			
			
	 <div class="portfolio-modal modal fade" id="tambahmember" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h2>Tambah Member</h2>
                            <hr class="star-primary">
									<div class="row">
										<div class="col-lg-12">
											<form method="post" action="" enctype="multipart/form-data">
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
			<input type="text" class="form-control"  placeholder="Nama Lengkap">
		  </div>
		  <div class="form-group">
			
			<input type="text" class="form-control" id="bagian" placeholder="Alamat">
		  </div>
		   <div class="form-group">
			
			<input type="email" class="form-control" id="email" placeholder="Email">
		  </div>
		  <div class="form-group">
			
			<input type="password" class="form-control" id="sandi" placeholder="Sandi">
		  </div>
		 
			<br>
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
		</div>
			
			<section class="success" id="member">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h2>Member</h2>
							<hr class="star-light">
						</div>
					</div>
					<div class="row">
						<a href="#tambahmember" data-toggle="modal" class="btn btn-lg btn-outline">Tambah Member</a></center></p></div>
                <table class="table table-condensed">
	  …			 <tr>
					<th>No</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Aksi</th>
				</tr>
				<tr>
					<td>1</td>
					<td>Abraham Samad</td>
					<td>samad@gmail.com</td>
					<td><button type="button" class="btn btn-warning">Edit</button> <button type="button" class="btn btn-danger">Hapus</button> </td>
				</tr>
					<tr>
					<td>2</td>
					<td>Baryntara Robert</td>
					<td>roberto.nian@gmail.com</td>
					<td><button type="button" class="btn btn-warning">Edit</button> <button type="button" class="btn btn-danger">Hapus</button> </td>
				</tr>
				<tr>
					<td>3</td>
					<td>Charlie Manhatan</td>
					<td>charlie89@gmail.com</td>
					<td><button type="button" class="btn btn-warning">Edit</button> <button type="button" class="btn btn-danger">Hapus</button> </td>
				</tr>
				<tr>
					<td>3</td>
					<td>Daizal Sofan</td>
					<td>daizal93@gmail.com</td>
					<td><button type="button" class="btn btn-warning">Edit</button> <button type="button" class="btn btn-danger">Hapus</button> </td>
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

			
		<section class="success" id="perusahaan">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h2>Perusahaan</h2>
							<hr class="star-light">
						</div>
					</div>
					<div class="row">
						<a href="#tambahperusahaan" data-toggle="modal" class="btn btn-lg btn-outline">Tambah Perusahaan</a></center></p></div>
                <table class="table table-condensed">
	  …			 <tr>
					<th>No</th>
					<th>Nama Perusahaan</th>
					<th>Email</th>
					<th>Aksi</th>
				</tr>
				<tr>
					<td>1</td>
					<td>PT BRAMASTHA ABIMANA</td>
					<td>samad@gmail.com</td>
					<td><button type="button" class="btn btn-warning">Edit</button> <button type="button" class="btn btn-danger">Hapus</button> </td>
				</tr>
					<tr>
					<td>2</td>
					<td>PT CITRA BUANA TEKNOLOGI</td>
					<td>samad@gmail.com</td>
					<td><button type="button" class="btn btn-warning">Edit</button> <button type="button" class="btn btn-danger">Hapus</button> </td>
				</tr>
				<tr>
					<td>3</td>
					<td>PT ABCD</td>
					<td>abcd@gmail.com</td>
					<td><button type="button" class="btn btn-warning">Edit</button> <button type="button" class="btn btn-danger">Hapus</button> </td>
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
																			
		</body>

    </section>

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

</body>

</html>
