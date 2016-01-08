
<section class="success" id="lowongan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Semua Lowongan</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row" font="Arial">
                <table class="table table-condensed">
	  			  <tr>
					<th>No</th>
					<th>Perusahaan</th>
					<th>Bagian </th>
					<th>Detil Lowongan</th>
					<th>Batas Pengiriman</th>
				  </tr>

				<?php 

				include '../koneksi.php';
				try { 
					$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$tampil = $db->query("SELECT * FROM lowongan");
					while($data = $tampil->fetch()){
				?>		
					<tr>
						<td> <?php echo $data['no'] ?></td>
						<td> <?php echo $data['perusahaan'] ?></td>
						<td> <?php echo $data['bagian'] ?></td>
						<td> <?php echo $data['detil_lowongan'] ?></td>
						<td> <?php echo $data['batas_pengiriman'] ?> </td>
						
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
		</div>
	</section>
		