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
	 			   <tr>
					<th>No</th>
					<th>Nama Perusahaan</th>
					<th>Alamat</th>
					<th>Telp</th>
					<th>Detil</th>
					<th>Aksi</th>
				  </tr>
				  <?php 

				include '../koneksi.php';
				try { 
					$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$tampil = $db->query("SELECT * FROM perusahaan");
					while($data = $tampil->fetch()){
				?>		
					<tr>
						<td> <?php echo $data['id_perusahaan'] ?></td>
						<td> <?php echo $data['nama'] ?></td>
						<td> <?php echo $data['alamat'] ?></td>
						<td> <?php echo $data['telp'] ?></td>
						<td> <?php echo $data['detil'] ?> </td>
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