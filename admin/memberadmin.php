<section class="success" id="member">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>Member</h2>
					<hr class="star-light">
				</div>
			</div>
			<div class="row">
				<button type="button" class="btn btn-primary" id="tambahmember">Daftar</button> <br>
				<div class="row" id="ajaxarea"> 
				</div>
               	<br><br>
                <table class="table table-condensed">
	  			<tr>
					<th>ID</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Email</th>
					<th>Sandi</th>
					<th>Telp</th>
					<th>Tanggal Lahir</th>
					<th>Jenis Kelamin</th>
					<th>Pendidikan</th>
					<th>Jurusan</th>
					<th>Aksi</th>
				</tr>
				<?php 
				include '../koneksi.php';
				try { 
					$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$tampil = $db->query("SELECT * FROM member");
					while($data = $tampil->fetch()){
				?>		
				<tr>
					<td> <?php echo $data['id_member'] ?></td>
					<td> <?php echo $data['nama'] ?></td>
					<td> <?php echo $data['alamat'] ?></td>
					<td> <?php echo $data['email'] ?></td>
					<td> <?php echo $data['sandi'] ?> </td>
					<td> <?php echo $data['telp'] ?></td>
					<td> <?php echo $data['tanggal'] ?></td>
					<td> <?php echo $data['jenis_kelamin'] ?></td>
					<td> <?php echo $data['pendidikan'] ?></td>
					<td> <?php echo $data['jurusan'] ?> </td>
					<td>
			           <button type="button" class="btn btn-warning">Edit</button>
			           <button type="button" class="btn btn-danger">Hapus</button>
			        </td>
					
				</tr>
					<?php	
					}
					} catch (Exception $e) {
						echo $e->getMessage();
					}
					



					 ?>

				</table>
			</div>

			 
			<script type="text/javascript"> 
        	  $("#tambahmember").click(function(){
           	 $("#ajaxarea").load("../form.php");
           }); </script>
         
			<nav>
			  <ul class="pager">
				<li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
				<li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
			  </ul>
			</nav>
			</div>
			
</section>
			