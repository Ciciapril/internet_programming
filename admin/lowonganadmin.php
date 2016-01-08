<section class="success" id="lowongan">
	<div class="row">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Semua Lowongan</h2>
                    <hr class="star-light">
                </div>
            </div>

            <div class="container" font="Arial">
				<div class="row" align="center">                                 
                    <button type="button" class="btn btn-primary" id="buttonmember">Tambah Lowongan</button>
            	 </div>
           		 <div class="row" id="tampil" > </div> 
               <!--  <script type="text/javascript" src="jquery.js"></script>--> 

                 <script type="text/javascript"> 
                  $("#buttonmember").click(function(){
                    $("#tampil").load("tambahlowongan.php");
                  }); </script>
                <table class="table table-condensed">
	  				<tr>
					<th>No</th> 
					<th>Perusahaan</th>
					<th>Bagian </th>
					<th>Detil Lowongan</th>
					<th>Batas Pengiriman</th>
					<th>Aksi</th>
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

			</div>
                
			<nav>
			  <ul class="pager">
				<li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
				<li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
			  </ul>
			</nav>
			</div>
					
		</section>