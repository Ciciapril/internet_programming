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
		<?php 

		include 'koneksi.php';
		try { 
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$tampil = $db->query("SELECT * FROM jobfair");
			while($data = $tampil->fetch()){
		?>		
			<tr>
				<td> <?php echo $data['id_jobfair'] ?></td>
				<td> <?php echo $data['gambar'] ?></td>
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