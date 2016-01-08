<form method="post" action="" enctype="multipart/form-data">
 <div class="row">
 <div class="col-md-2">
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<input type="text" class="form-control"  placeholder="Nama" id="nama">
		 </div>
		 <div class="form-group">
			<input type="text" class="form-control" id="alamat" placeholder ="Alamat">
		  </div>
		  <div class="form-group">
			
			<input type="email" class="form-control" id="email" placeholder="Email">
		  </div>
		  <div class="form-group">
			
			<input type="password" class="form-control" id="sandi" placeholder="Sandi">
		  </div>
		   <div class="form-group">
			<input type="text" class="form-control" id="telp" placeholder ="No Telp">
		  </div>
				            
	</div>
	<div class="col-md-4">
		<div class="modal-body">
            <label>Tanggal Lahir</label>
            <input type="date" id="tanggal">
        </div>
        <label>Jenis Kelamin</label>
	  	<div class="radio">
		  	<label class="radio-inline" id="jk">
			  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="laki-laki"> Laki-Laki
			</label>
			<label class="radio-inline">
			  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Perempuan"> Perempuan
			</label>
		</div>
		<label>Pendidikan Terakhir</label>
		<select class="form-control" id ="pendidikan">
		  <option value="SMA/K">SMA/K</option>
		  <option value="D1">D1</option>
		  <option value="D2">D2</option>
		  <option value="D3">D3</option>
		  <option value="S1">S1</option>
		  <option value="S2">S2</option>
		</select>
		<div class="form-group">
		<input type="text" class="form-control" id="jurusan" placeholder="jurusan">
	  	</div>
	  	
		<div class="clearfix"></div>
	</div>
	<div class="col-md-2">
	</div>
  </div>
    <div class="row" align="center">
	  <button  type="button" class="btn btn-primary" id="buttondaftar">SUBMIT</button>
	</div>	

</form> 